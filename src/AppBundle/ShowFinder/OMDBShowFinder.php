<?php
namespace AppBundle\ShowFinder;

use GuzzleHttp\Client;
use AppBundle\Entity\OMDBShow;

class OMDBShowFinder implements ShowFinderInterface
{

	private $client;

	public function __construct(Client $client)
	{
		$this->client = $client;
	}

	/**
     * @param $name
     * @return OMDBShow
     */
	public function findAllWithName($name)
	{
		$api_response = $this->client->get('?apikey=8345559e&type=series&t="'.$name.'"');
		$response = \GuzzleHttp\json_decode($api_response->getBody(), true);
		if($response["Response"] != "False"){
			$show_api = new OMDBShow();
			foreach($response as $field => $value){
				$method = sprintf('set%s', $field);
				$show_api->$method($value);
			}
		}else{
			$show_api = null;
		}
		return $show_api;
	}

	public function getName()
	{
		return 'IMDB API';
	}
}