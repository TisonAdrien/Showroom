<?php
namespace AppBundle\ShowFinder;

use Symfony\Bridge\Doctrine\RegistryInterface;

class DBShowFinder implements ShowFinderInterface
{
	private $doctrine;

	public function __construct(RegistryInterface $doctrine)
	{
		$this->doctrine = $doctrine;
	}

	/**
     * @param $name
     * @return Show[]
     */
	public function findAllWithName($name)
	{
		return $this->doctrine->getRepository("AppBundle:Show")->findAllWithName($name);
	}

	public function getName()
	{
		return 'Local Database';
	}
}