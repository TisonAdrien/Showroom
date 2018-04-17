<?php

namespace AppBundle\Controller\Api;

use AppBundle\Entity\Media;
use AppBundle\File\FileUploader;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Routing\RouterInterface;

/**
 * @Route("/media", name="media_")
 */
class MediaController extends Controller
{
	/**
	 * @Route("/", name="add")
	 * @Method({"POST"})
	 */
	public function uploadAction(Request $request, FileUploader $fileUploader, RouterInterface $router)
	{
		$media = new Media();
		$media->setFile($request->files->get('file'));
		// Validate media object
		$generatedFileName = $fileUploader->upload($media->getFile(), time());
		$path = $this->getParameter('upload_directory_file').'/'.$generatedFileName;
		$media->setPath($router->generate("show_list", [], UrlGeneratorInterface::ABSOLUTE_URL).$path);
		$em = $this->getDoctrine()->getManager();
		$em->persist($media);
		$em->flush();
		return new Response('', Response::HTTP_CREATED, ['Content-Type' => 'application\json']);
	}
}