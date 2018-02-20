<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use AppBundle\Type\ShowType;
use AppBundle\Entity\Show;
use AppBundle\File\FileUploader;
use AppBundle\Repository\ShowRepository;
use AppBundle\ShowFinder\ShowFinder;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Csrf\CsrfToken;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;

/**
 * @Route(name="show_")
 */
class ShowController extends Controller
{
    /**
     * @Route("/", name="list")
     */
    public function listAction(Request $request, ShowFinder $showFinder)
    {
        $session = $request->getSession();
        if($session->has('query_search_shows')){
            $response = $showFinder->searchByName($session->get('query_search_shows'));
            $shows = $response;
            $session->remove('query_search_shows');
        }else{
            $em = $this->getDoctrine()->getManager();
            $shows = $em->getRepository("AppBundle:Show")->findAll();
            $show_api = null;
        }
        return $this->render(
            'show/list.html.twig',
            [
                'shows' => $shows
            ]
        );
    }

    /**
     * @Route("/search", name="search")
     * @Method({"POST"})
     */
    public function searchAction(Request $request)
    {
        $request->getSession()->set('query_search_shows', $request->request->get('search'));
        return $this->redirectToRoute('show_list');
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
            $show->setAuthor($this->getUser());
            //Upload file
            $generatedFileName = $fileUploader->upload($show->getTmpPicture(),$show->getCategory()->getName());
            $show->setMainPicture($generatedFileName);
            $show->setDataSource(Show::DATA_SOURCE_DB);
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
        $this->denyAccessUnlessGranted('osef',$show);
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

    /**
     * @Route("/delete", name="delete")
     * @Method({"DELETE"})
     */
    public function deleteAction(Request $request, CsrfTokenManagerInterface $csrfTokenManager)
    {
        $showId = $request->request->get('show_id');
        $show = $this->getDoctrine()->getRepository('AppBundle:Show')->findOneBy(['id' => $showId]);
        if(!$show)
            throw new NotFoundHttpException('There is no show with the id %d', $showId);
        $this->denyAccessUnlessGranted('osef',$show);
        $csrfToken = new CsrfToken('delete_show', $request->request->get('_csrf_token'));
        if($csrfTokenManager->isTokenValid($csrfToken)){
            $picture_dir = $this->getParameter('kernel.project_dir').'/web'.$this->getParameter('upload_directory_file').'/'.$show->getMainPicture();
            if(count(glob($picture_dir)) > 0)
                unlink($picture_dir);
            $em = $this->getDoctrine()->getManager();
            $em->remove($show);
            $em->flush();
            $this->addFlash('success', 'The show has been successfully deleted');
        }else{
            $this->addFlash('danger', 'The csrf token is not valid. The detection was not completed.');
        }
        return $this->redirectToRoute('show_list');
    }
}