<?php

namespace Tests\AppBundle\Security\Authentication;

use AppBundle\Entity\User;
use AppBundle\Security\Authentication\ApiUserPasswordAuthenticator;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\BCryptPasswordEncoder;
use Symfony\Component\Security\Core\Encoder\EncoderFactory;
use Symfony\Component\Security\Core\Encoder\EncoderFactoryInterface;

class ApiUserPasswordAuthenticatorTest extends TestCase
{
	/**
	 * @dataProvider getHeaders
	 */
	public function testGetCredentialsWithoutAnyHeaders()
	{
		$encoderFactory = new EncoderFactory([]);
		$authenticator = new ApiUserPasswordAuthenticator($encoderFactory);
		$request = new Request();

		$result = $authenticator->getCredentials($request);

		$this->assertNull($result);
	}

	public function testGetCredentialsFromHeaders()
	{
		$encoderFactory = new EncoderFactory([]);
		$authenticator = new ApiUserPasswordAuthenticator($encoderFactory);
		$request = new Request();
		
		$request->headers->add(['X_PASSWORD'=>'password','X_USERNAME'=>'username']);
		$result = $authenticator->getCredentials($request);

		$expected = array('username'=>'username','password'=>'password');
		$this->assertSame($expected, $result);
	}

	public function getHeaders()
	{
		return [
			[['X_USERNAME' => 'username']],
			[['X_PASSWORD' => 'password']]
		];
	}

	public function testCheckCredentialsAreCorrect()
	{
		$encoder = new BCryptPasswordEncoder(13);
		$encoderFactory = $this
							->getMockBuilder(EncoderFactoryInterface::class)
							->disableOriginalConstructor()
							->getMock()
						;
		$encoderFactory->method('getEncoder')->willReturn($encoder);
		$authenticator = new ApiUserPasswordAuthenticator($encoderFactory);
		$user = new User();
		$user->setPassword('$2y$13$wC4rK67PvnQuhKYLCh6mTOXpJ9nacg2ycbdivRic.LH3ZaFnmTZCO');
		$credentials = array('username'=>'username','password'=>'password');

		$result = $authenticator->checkCredentials($credentials, $user);
	}

	/**
	 * @expectedException Symfony\Component\Security\Core\Exception\AuthenticationException
	 */
	public function testCheckCredentialsAreWrong()
	{
		$encoder = new BCryptPasswordEncoder(13);
		$encoderFactory = $this
							->getMockBuilder(EncoderFactoryInterface::class)
							->disableOriginalConstructor()
							->getMock()
						;
		$encoderFactory->method('getEncoder')->willReturn($encoder);
		$authenticator = new ApiUserPasswordAuthenticator($encoderFactory);
		$user = new User();
		$user->setPassword('$2y$13$wC4rK67PvnQuhKYLCh6mTOXpJ9nacg2ycbdivRic.LH3ZaFnmTZCO');
		$credentials = array('username'=>'username','password'=>'wrongPassword');

		$result = $authenticator->checkCredentials($credentials, $user);


	}
}