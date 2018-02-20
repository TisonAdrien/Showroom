<?php

namespace AppBundle\Controller\Api;

use JMS\Serializer\SerializerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Show;


class ShowController extends Controller
{
	/**
	 * @Method({"GET"})
	 * @Route("/shows", name="api_show_list")
	 */
	public function listAction(SerializerInterface $serializer)
	{
		$shows = $this->getDoctrine()->getRepository('AppBundle:Show')->findAll();
		$data = $serializer->serialize($shows, 'json');
		return new Response($data, Response::HTTP_OK, ['Content-Type' => 'application\json']);
	}

	/**
	 * @Method({"GET"})
	 * @Route("/shows/{id}", name="api_show_unit")
	 */
	public function unitAction(SerializerInterface $serializer, Show $show)
	{
		$data = $serializer->serialize($show, 'json');
		return new Response($data, Response::HTTP_OK, ['Content-Type' => 'application\json']);
	}
}