<?php

namespace AppBundle\Serializer\Handler;

use AppBundle\Entity\Show;
use Doctrine\Common\Persistence\ManagerRegistry;
use JMS\Serializer\EventDispatcher\Events;
use JMS\Serializer\EventDispatcher\EventSubscriberInterface;
use JMS\Serializer\Handler\SubscribingHandlerInterface;
use JMS\Serializer\GraphNavigator;
use JMS\Serializer\JsonDeserializationVisitor;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class ShowHandler implements SubscribingHandlerInterface
{
	private $doctrine;

	private $tokenStorage;

	public function __construct(ManagerRegistry $doctrine, TokenStorageInterface $tokenStorage)
	{
		$this->doctrine = $doctrine;
		$this->tokenStorage = $tokenStorage;
	}

	public static function getSubscribingMethods()
	{
		return [
			[
				'direction' => GraphNavigator::DIRECTION_DESERIALIZATION,
				'format' => 'json',
                'type' => 'Appbundle\Entity\Show',
				'method' => 'deserialize'
			]
		];
	}

	public function deserialize(JsonDeserializationVisitor $visitor, $data)
	{
		$show = new Show();
		$show
			->setName($data['name'])
			->setAbstract($data['abstract'])
			->setCountry($data['country'])
			->setReleaseDate(new \Datetime($data['release_date']))
			->setMainPicture($data['main_picture'])
		;
		$em = $this->doctrine->getManager();
		if(!$category = $em->getRepository('AppBundle:Category')->findOneById($data['category']))
			throw new \LogicException("The category does not exist");

		$show->setCategory($category);

		$user = $this->tokenStorage->getToken()->getUser();
		$show->setAuthor($user);
		
		return $show;
	}
}