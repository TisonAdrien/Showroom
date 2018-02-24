<?php

namespace AppBundle\Controller\Api;

use AppBundle\Entity\Show;
use JMS\Serializer\DeserializationContext;
use JMS\Serializer\SerializationContext;
use JMS\Serializer\SerializerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Encoder\EncoderFactoryInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;


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


    /**
     * @Method({"DELETE"})
     * @Route("/shows/{id}", name="api_show_delete")
     */
    public function deleteAction(Show $show, Request $request, SerializerInterface $serializer, ValidatorInterface $validator)
    {
        if(!is_null($show)){
            $em = $this->getDoctrine()->getManager();
            $em->remove($show);
            $em->flush();
            return new Response('Show deleted', Response::HTTP_OK, ['Content-Type' => 'application\json']);
        }else{
            return new Response('Show not found', Response::HTTP_NOT_FOUND, ['Content-Type' => 'application\json']);
        }
    }
}