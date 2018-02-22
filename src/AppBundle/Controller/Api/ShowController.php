<?php

namespace AppBundle\Controller\Api;

use AppBundle\Entity\Show;
use JMS\Serializer\SerializationContext;
use JMS\Serializer\SerializerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class ShowController extends Controller
{
    /**
     * @Method({"GET"})
     * @Route("/shows", name="api_show_list")
     */
    public function listAction(SerializerInterface $serializer)
    {
        $shows = $this->getDoctrine()->getRepository('AppBundle:Show')->findAll();
        $serializationContext = SerializationContext::create();
        $data = $serializer->serialize($shows, 'json', $serializationContext->setGroups(['show']));
        return new Response($data, Response::HTTP_OK, ['Content-Type' => 'application\json']);
    }

    /**
     * @Method({"GET"})
     * @Route("/shows/{id}", name="api_show_unit")
     */
    public function unitAction(SerializerInterface $serializer, Show $show)
    {
        $serializationContext = SerializationContext::create();
        $data = $serializer->serialize($show, 'json', $serializationContext->setGroups(['show']));
        return new Response($data, Response::HTTP_OK, ['Content-Type' => 'application\json']);
    }
}