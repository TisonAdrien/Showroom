<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Category;
use AppBundle\Type\CategoryType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/category",name="category_")
 */
class CategoryController extends Controller
{
    /**
     * @Route("/add",name="add")
     */
    public function createAction(Request $request)
    {
        $category = new Category();
        $form = $this->createForm(CategoryType::class,$category);

        $form->handleRequest($request);

        if($form->isValid() && $form->isSubmitted()){

            //Save
            $em = $this->getDoctrine()->getManager();
            $em->persist($category);
            $em->flush();

            //Message flash
            $this->addFlash('success','You successfully added a new Category');

            return $this->redirectToRoute('show_list');
        }

        return $this->render('category/add.html.twig',
            [
                'categoryForm' => $form->createView()
            ]
        );
    }
}