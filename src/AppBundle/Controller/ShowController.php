<?php

namespace AppBundle\Controller;

use AppBundle\Type\ShowType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Show;


/**
 * @Route(name="show_")
 */
class ShowController extends Controller
{
    /**
     * @Route("/", name="list")
     */
    public function listAction()
    {
        return $this->render('show/list.html.twig');
    }

    /**
     * @Route("/add",name="add")
     */
    public function createAction(Request $request)
    {
        $show = new Show();
        $form = $this->createForm(ShowType::class,$show);

        $form->handleRequest($request);

        if($form->isValid() && $form->isSubmitted()){
            //dump($show); die;

            $em = $this->getDoctrine()->getManager();
            $em->persist($show);
            $em->flush();

            //Upload File

            //Save

            //Message flash
            $this->addFlash('success','You successfully added a new Show');

            return $this->redirectToRoute('show_list');
        }

        return $this->render(
            'show/add.html.twig',
            [
                'showForm' => $form->createView()
            ]
        );
    }

    public function categoriesAction()
    {
        return $this->render(
            "_include/categories.html.twig",
            [
                'categories' => ['Web Design', 'HTML', 'Freebies', 'Javascript', 'CSS', 'Tutorials']
            ]
        );
    }
}