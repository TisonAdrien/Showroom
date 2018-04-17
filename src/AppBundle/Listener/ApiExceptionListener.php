<?php

namespace AppBundle\Listener;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class ApiExceptionListener implements EventSubscriberInterface
{
	const EXCEPTION_CODE = "You do not know the way";

	public static function getSubscribedEvents()
	{
		return array(
			KernelEvents::EXCEPTION => array(
				'processExceptionForApi',
				0
			)
		);
	}

	public function processExceptionForApi(GetResponseForExceptionEvent $event)
	{
		$request = $event->getRequest();
		$routeName = $request->attributes->get('_route');
		$api = substr($routeName, 0, 3);
		if($api !== 'api')
			return;

		$exception = $event->getException();
		$data = array(
			'code' => self::EXCEPTION_CODE,
			'message' => $exception->getMessage()
		);
		$response = new JsonResponse($data, Response::HTTP_INTERNAL_SERVER_ERROR);
		$event->setResponse($response);
	}
}