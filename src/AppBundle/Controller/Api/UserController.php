<?php

namespace AppBundle\Controller\Api;

use AppBundle\Entity\User;
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



class UserController extends Controller
{
    /**
     * @Method({"GET"})
     * @Route("/users", name="api_user_list")
     */
    public function listAction(SerializerInterface $serializer)
    {
        $users = $this->getDoctrine()->getRepository('AppBundle:User')->findAll();
        $serializationContext = SerializationContext::create();
        $data = $serializer->serialize($users, 'json', $serializationContext->setGroups(['user']));
        return new Response($data, Response::HTTP_OK, ['Content-Type' => 'application\json']);
    }

    /**
     * @Method({"GET"})
     * @Route("/users/{id}", name="api_user_unit")
     */
    public function unitAction(SerializerInterface $serializer, User $user)
    {
        $serializationContext = SerializationContext::create();
        $data = $serializer->serialize($user, 'json', $serializationContext->setGroups(['user']));
        return new Response($data, Response::HTTP_OK, ['Content-Type' => 'application\json']);
    }

    /**
     * @Method({"POST"})
     * @Route("/users", name="api_user_create")
     */
    public function createAction(Request $request, SerializerInterface $serializer, ValidatorInterface $validator, EncoderFactoryInterface $encoderFactory)
    {
        $serializationContext = DeserializationContext::create();
        $data = $serializer->deserialize($request->getContent(), User::class, 'json', $serializationContext->setGroups(['user','user_create']));
        $error = $validator->validate($data);
        if($error->count() == 0){
            $encoder = $encoderFactory->getEncoder($data);
            $password = $encoder->encodePassword($data->getPassword(), null);
            $data->setPassword($password);
            $data->setRoles(explode(', ', $data->getRoles()));
            $em = $this->getDoctrine()->getManager();
            $em->persist($data);
            $em->flush();
            return new Response('User created', Response::HTTP_CREATED, ['Content-Type' => 'application\json']);
        }else{
            return new Response($serializer->serialize($error, 'json'), Response::HTTP_BAD_REQUEST, ['Content-Type' => 'application\json']);
        }
    }

    /**
     * @Method({"PUT"})
     * @Route("/users/{id}", name="api_category_update")
     */
    public function updateAction(User $user, Request $request, SerializerInterface $serializer, ValidatorInterface $validator, EncoderFactoryInterface $encoderFactory)
    {
        $serializationContext = DeserializationContext::create();
        $data = $serializer->deserialize($request->getContent(), User::class, 'json', $serializationContext->setGroups(['show','user_create']));
        $error = $validator->validate($data);
        if($error->count() == 0){
            $encoder = $encoderFactory->getEncoder($data);
            $password = $encoder->encodePassword($data->getPassword(), null);
            $data->setPassword($password);
            $data->setRoles(explode(', ', $data->getRoles()));
            $user->update($data);
            $this->getDoctrine()->getManager()->flush();
            return new Response('User updated', Response::HTTP_CREATED, ['Content-Type' => 'application\json']);
        }else{
            return new Response($serializer->serialize($error, 'json'), Response::HTTP_BAD_REQUEST, ['Content-Type' => 'application\json']);
        }
    }


    /**
     * @Method({"DELETE"})
     * @Route("/users/{id}", name="api_user_delete")
     */
    public function deleteAction(User $user, Request $request, SerializerInterface $serializer, ValidatorInterface $validator)
    {
        if(!is_null($user)){
            $em = $this->getDoctrine()->getManager();
            $em->remove($user);
            $em->flush();
            return new Response('User deleted', Response::HTTP_OK, ['Content-Type' => 'application\json']);
        }else{
            return new Response('User not found', Response::HTTP_NOT_FOUND, ['Content-Type' => 'application\json']);
        }
    }
}