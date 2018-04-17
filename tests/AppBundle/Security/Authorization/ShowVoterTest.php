<?php

namespace Tests\AppBundle\Security\Authorization;

use AppBundle\Entity\Show;
use AppBundle\Entity\User;
use AppBundle\Security\Authorization\ShowVoter;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage;

class ShowVoterTest extends TestCase
{
	public function testSupportsWrong()
	{
		$showVoter = new ShowVoter();
		$attribute = "";
		$subject = "";
		$result = $showVoter->supports($attribute, $subject);
		$this->assertSame(false, $result);
	}

	public function testSupportsCorrect()
	{
		$showVoter = new ShowVoter();
		$attribute = "";
		$subject = new Show();
		$result = $showVoter->supports($attribute, $subject);
		$this->assertSame(true, $result);
	}

	public function testVoteWrong()
	{
		$tokenStorage = $this
							->createMock(TokenStorage::class)
						;
		$token = $this
						->createMock(UsernamePasswordToken::class)
					;

		$user = new User();

		$token->method('getUser')->willReturn($user);

		$tokenStorage->method('getToken')->willReturn($token);


		$showVoter = new ShowVoter();
		$attribute = "";
		$subject = new Show();
		$result = $showVoter->voteOnAttribute($attribute, $subject, $token);
		$this->assertSame(false, $result);
	}

	public function testVoteCorrect()
	{
		$tokenStorage = $this
							->createMock(TokenStorage::class)
						;
		$token = $this
						->createMock(UsernamePasswordToken::class)
					;

		$user = new User();

		$token->method('getUser')->willReturn($user);

		$tokenStorage->method('getToken')->willReturn($token);


		$showVoter = new ShowVoter();
		$attribute = "";
		$subject = new Show();
		$subject->setAuthor($user);
		$result = $showVoter->voteOnAttribute($attribute, $subject, $token);
		$this->assertSame(true, $result);
	}
	
}