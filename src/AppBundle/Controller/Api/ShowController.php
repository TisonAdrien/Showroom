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
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Swagger\Annotations as SWG;


class ShowController extends Controller
{
    /**
     * @Method({"GET"})
     * @Route("/shows", name="api_show_list")
     *
     * @SWG\Response(
     *     response=200,
     *     description="Returns the list of shows"
     * )
     * @SWG\Tag(name="shows")
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
     * @Route("/shows/name/{name}", name="api_show_byname")
     *
     * @SWG\Response(
     *     response=200,
     *     description="Returns the show with name like {name}"
     * )
     * @SWG\Parameter(
     *     name="name",
     *     in="path",
     *     type="string",
     *     description="The field used to search by name"
     * )
     * @SWG\Tag(name="shows")
     */
    public function listActionByName(SerializerInterface $serializer, String $name)
    {
        $shows = $this->getDoctrine()->getRepository('AppBundle:Show')->findAllWithName($name);
        $serializationContext = SerializationContext::create();
        $data = $serializer->serialize($shows, 'json', $serializationContext->setGroups(['show']));
        if($data == "[]")
            return new Response('No show found for name "'.$name.'" :(', Response::HTTP_NOT_FOUND, ['Content-Type' => 'application\json']);
        else
            return new Response($data, Response::HTTP_OK, ['Content-Type' => 'application\json']);
    }

    /**
     * @Method({"GET"})
     * @Route("/shows/{id}", name="api_show_unit")
     *
     * @SWG\Response(
     *     response=200,
     *     description="Returns the show with id {id}"
     * )
     * @SWG\Parameter(
     *     name="id",
     *     in="path",
     *     type="integer",
     *     description="The field used to search by id"
     * )
     * @SWG\Tag(name="shows")
     */
    public function unitAction(SerializerInterface $serializer, Show $show)
    {
        $serializationContext = SerializationContext::create();
        $data = $serializer->serialize($show, 'json', $serializationContext->setGroups(['show']));
        return new Response($data, Response::HTTP_OK, ['Content-Type' => 'application\json']);
    }


    /**
     * @Method({"POST"})
     * @Route("/shows", name="api_show_create")
     */
    public function createAction(Request $request, SerializerInterface $serializer, ValidatorInterface $validator)
    {
        $serializationContext = DeserializationContext::create();
        $data_serialized = json_decode($request->getContent());
        $category = $this->getDoctrine()->getRepository('AppBundle:Category')->findOneBy(array('id' => $data_serialized->category));
        $author = $this->getDoctrine()->getRepository('AppBundle:User')->findOneBy(array('id' => $data_serialized->author));
        $data = $serializer->deserialize($request->getContent(), Show::class, 'json', $serializationContext->setGroups(['show_create']));
        $data
            ->setAuthor($author)
            ->setCategory($category)
            ->setDataSource(Show::DATA_SOURCE_DB)
            ->setMainPicture('NO_PICTURE')
        ;
        $error = $validator->validate($data);
        if($error->count() == 0){
            $em = $this->getDoctrine()->getManager();
            $em->persist($data);
            $em->flush();
            return new Response('Show created', Response::HTTP_CREATED, ['Content-Type' => 'application\json']);
        }else{
            return new Response($serializer->serialize($error, 'json'), Response::HTTP_BAD_REQUEST, ['Content-Type' => 'application\json']);
        }
    }

    /**
     * @Method({"PUT"})
     * @Route("/shows/{id}", name="api_show_update")
     */
    public function updateAction(Show $show, Request $request, SerializerInterface $serializer, ValidatorInterface $validator)
    {
        $serializationContext = DeserializationContext::create();
        $data_serialized = json_decode($request->getContent());
        $category = $this->getDoctrine()->getRepository('AppBundle:Category')->findOneBy(array('id' => $data_serialized->category));
        $author = $this->getDoctrine()->getRepository('AppBundle:User')->findOneBy(array('id' => $data_serialized->author));
        $data = $serializer->deserialize($request->getContent(), Show::class, 'json', $serializationContext->setGroups(['show_create']));
        $data
            ->setAuthor($author)
            ->setCategory($category)
        ;
        $error = $validator->validate($data);
        if($error->count() == 0){
            $show->update($data);
            $this->getDoctrine()->getManager()->flush();
            return new Response('Show updated', Response::HTTP_CREATED, ['Content-Type' => 'application\json']);
        }else{
            return new Response($serializer->serialize($error, 'json'), Response::HTTP_BAD_REQUEST, ['Content-Type' => 'application\json']);
        }
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