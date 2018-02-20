<?php

namespace AppBundle\Controller\Api;

use JMS\Serializer\SerializerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\User;


class UserController extends Controller
{
	/**
	 * @Method({"GET"})
	 * @Route("/users", name="api_user_list")
	 */
	public function listAction(SerializerInterface $serializer)
	{
		$users = $this->getDoctrine()->getRepository('AppBundle:User')->findAll();
		$data = $serializer->serialize($users, 'json');
		return new Response($data, Response::HTTP_OK, ['Content-Type' => 'application\json']);
	}

	/**
	 * @Method({"GET"})
	 * @Route("/users/{id}", name="api_user_unit")
	 */
	public function unitAction(SerializerInterface $serializer, User $user)
	{
		$data = $serializer->serialize($user, 'json');
		return new Response($data, Response::HTTP_OK, ['Content-Type' => 'application\json']);
	}
}