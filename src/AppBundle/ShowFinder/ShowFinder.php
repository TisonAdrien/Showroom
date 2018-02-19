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
		$results = array();
		foreach($this->finders as $finder){
			$results = array_merge($results, $finder->findAllWithName($name));
		}
		return $results;
	}
}