<?php

namespace AppBundle\Controller\Api;

use JMS\Serializer\SerializerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Validator\ValidatorInterface;
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

	/**
	 * @Method({"POST"})
	 * @Route("/categories", name="api_category_create")
	 */
	public function createAction(Request $request, SerializerInterface $serializer, ValidatorInterface $validator)
	{
		$data = $serializer->deserialize($request->getContent(), Category::class, 'json');
		$error = $validator->validate($data);
		if($error->count() == 0){
			$em = $this->getDoctrine()->getManager();
			$em->persist($data);
			$em->flush();
			return new Response('Category created', Response::HTTP_CREATED, ['Content-Type' => 'application\json']);
		}else{
			return new Response($serializer->serialize($error, 'json'), Response::HTTP_BAD_REQUEST, ['Content-Type' => 'application\json']);
		}
	}


	/**
	 * @Method({"PUT"})
	 * @Route("/categories/{id}", name="api_category_update")
	 */
	public function updateAction(Category $category, Request $request, SerializerInterface $serializer, ValidatorInterface $validator)
	{
		$data = $serializer->deserialize($request->getContent(), Category::class, 'json');
		$error = $validator->validate($data);
		if($error->count() == 0){
			$category->update($data);
			$this->getDoctrine()->getManager()->flush();
			return new Response('Category updated', Response::HTTP_CREATED, ['Content-Type' => 'application\json']);
		}else{
			return new Response($serializer->serialize($error, 'json'), Response::HTTP_BAD_REQUEST, ['Content-Type' => 'application\json']);
		}
	}
}