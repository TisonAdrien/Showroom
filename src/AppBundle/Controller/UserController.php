<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\User;
use AppBundle\Type\UserType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\EncoderFactoryInterface;

/**
 * @Route("/user",name="user_")
 */
class UserController extends Controller
{
	/**
	 * @Route("/create", name="create")
	 */
	public function createAction(Request $request, EncoderFactoryInterface $encoderFactory)
	{
		$user = new User();
		$userForm = $this->createForm(UserType::class, $user);
		$userForm->handleRequest($request);
		if($userForm->isValid()){
			$em = $this->getDoctrine()->getManager();
			$encoder = $encoderFactory->getEncoder($user);
			$hashedPassword = $encoder->encodePassword($user->getPassword(), null);
			$user->setPassword($hashedPassword);
			$em->persist($user);
			$em->flush();
			$this->addFlash('success', 'The user has been successfully added');
			return $this->redirectToRoute('show_list');
		}
		return $this->render('user/create.html.twig', array(
			'userForm' => $userForm->createView()
		));
	}

	/**
	 * @Route("/list", name="list")
	 */
	public function listAction()
	{
		return $this->render('user/list.html.twig', array(
			'users' => $this->getDoctrine()->getRepository('AppBundle:User')->findAll()
		));
	}

}