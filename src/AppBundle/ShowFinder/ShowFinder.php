<?php
namespace AppBundle\ShowFinder;

class ShowFinder
{
	private $finders;

	public function addFinder($finder)
	{
		$this->finders[] = $finder;
	}

	public function searchByName($name)
	{
		$tmp = array();
		foreach($this->finders as $finder){
			$tmp[$finder->getName()] = $finder->findAllWithName($name);
		}
		return $tmp;
	}
}