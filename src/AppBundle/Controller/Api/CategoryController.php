<?php

namespace AppBundle\Controller\Api;

use JMS\Serializer\SerializerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Category;


class CategoryController extends Controller
{
	/**
	 * @Method({"GET"})
	 * @Route("/categories", name="api_category_list")
	 */
	public function listAction(SerializerInterface $serializer)
	{
		$categories = $this->getDoctrine()->getRepository('AppBundle:Category')->findAll();
		$data = $serializer->serialize($categories, 'json');
		return new Response($data, Response::HTTP_OK, ['Content-Type' => 'application\json']);
	}

	/**
	 * @Method({"GET"})
	 * @Route("/categories/{id}", name="api_category_unit")
	 */
	public function unitAction(SerializerInterface $serializer, Category $category)
	{
		$data = $serializer->serialize($category, 'json');
		return new Response($data, Response::HTTP_OK, ['Content-Type' => 'application\json']);
	}
}