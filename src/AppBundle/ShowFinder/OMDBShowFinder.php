<?php
namespace AppBundle\ShowFinder;

use GuzzleHttp\Client;

class OMDBShowFinder implements ShowFinderInterface
{

	private $client;

	public function __construct(Client $client)
	{
		$this->client = $client;
	}

	/**
     * @param $name
     * @return Show[]
     */
	public function findAllWithName($name)
	{
		// Data : http://www.omdbapi.com/?apikey=8345559e&t=[name]&i=[id]&type=series
		// Image : http://img.omdbapi.com/?apikey=8345559e&i=[id]
		$api_response = $this->client->get('?apikey=8345559e&type=series&t="'.$name.'"');
		dump($name);
		dump(\GuzzleHttp\json_decode($api_response->getBody(), true)); die();
	}

	public function getName()
	{
		return 'IMDB API';
	}
}