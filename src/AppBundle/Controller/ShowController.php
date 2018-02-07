<?php

namespace AppBundle\Controller;

use AppBundle\Type\ShowType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Show;
use AppBundle\File\FileUploader;
use AppBundle\Repository\ShowRepository;


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
        $em = $this->getDoctrine()->getManager();
        $shows = $em->getRepository("AppBundle:Show")->findAll();
        return $this->render(
            'show/list.html.twig',
            [
                'shows' => $shows
            ]
        );
    }

    /**
     * @Route("/search", name="search")
     */
    public function searchAction(Request $request)
    {
        $name = $request->request->get('search');
        $em = $this->getDoctrine()->getManager();
        $shows = $em->getRepository("AppBundle:Show")->findAllWithName($name);
        return $this->render(
            'show/list.html.twig',
            [
                'shows' => $shows,
                'search' => $name
            ]
        );
    }

    /**
     * @Route("/add",name="add")
     */
    public function createAction(Request $request, FileUploader $fileUploader)
    {
        $show = new Show();
        $form = $this->createForm(ShowType::class,$show);
        $form->handleRequest($request);
        if($form->isValid() && $form->isSubmitted()){
            //Upload file
            $generatedFileName = $fileUploader->upload($show->getTmpPicture(),$show->getCategory()->getName());
            $show->setMainPicture($generatedFileName);
            //Save data
            $em = $this->getDoctrine()->getManager();
            $em->persist($show);
            $em->flush();
            //Message flash
            $this->addFlash('success','You successfully added a new Show');
            return $this->redirectToRoute('show_list');
        }
        return $this->render('show/add.html.twig',['showForm' => $form->createView()]);
    }

    /**
     * @Route("/update/{id}", name="update")
     */
    public function updateAction(Show $show, Request $request, FileUploader $fileUploader)
    {
        $showForm = $this->createForm(ShowType::class, $show, array('validation_groups' => array('update')));
        $showForm->handleRequest($request);
        if($showForm->isValid() && $showForm->isSubmitted()){
            //Upload file if it's sent
            if($show->getTmpPicture() != null){
                //Delete old file
                unlink($this->getParameter('kernel.project_dir').'/web'.$this->getParameter('upload_directory_file').'/'.$show->getMainPicture());
                //Upload new file
                $generatedFileName = $fileUploader->upload($show->getTmpPicture(),$show->getCategory()->getName());
                $show->setMainPicture($generatedFileName);
            }
            //Update data
            $em = $this->getDoctrine()->getManager();
            $em->persist($show);
            $em->flush();
            $this->addFlash('success','You successfully update the show !');
            return $this->redirectToRoute('show_list');
        }
        return $this->render('show/add.html.twig', array('showForm' => $showForm->createView(),'show' => $show));
    }

    public function categoriesAction()
    {
        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository("AppBundle:Category")->findAll();
        return $this->render(
            "_include/categories.html.twig",
            [
                'categories' => $categories
            ]
        );
    }
}