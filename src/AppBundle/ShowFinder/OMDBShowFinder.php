<?php
namespace AppBundle\ShowFinder;

use GuzzleHttp\Client;
use AppBundle\Entity\Show;
use AppBundle\Entity\Category;

class OMDBShowFinder implements ShowFinderInterface
{
	private $apiKey;

	private $client;

	public function __construct(Client $client, $apiKey)
	{
		$this->client = $client;
		$this->apiKey = $apiKey;
	}

	/**
     * @param $name
     * @return Show[]
     */
	public function findAllWithName($name)
	{
		$api_response = $this->client->get('?apikey='.$this->apiKey.'&type=series&t="'.$name.'"');

		return $this->convertToShow(\GuzzleHttp\json_decode($api_response->getBody(), true));
	}


	/**
	 * Create a private function that transform a OMDB json into a Show and Category
	 * @param String json
	 * @return Show[] shows
	 */
	public function convertToShow($json)
	{
		if($json['Response'] == 'False' && $json['Error'] == 'Series not found!')
			return array();

		$category = new Category();
		$category->setName( ($json['Genre'] == 'N/A' ? 'Undefined' : $json['Genre']) );

		$shows = array();
		$show = new Show();
		$show
			->setName($json['Title'])
			->setDataSource(Show::DATA_SOURCE_OMDB)
			->setAbstract( ($json['Plot'] == 'N/A' ? 'Not provided' : $json['Plot']) )
			->setCountry( ($json['Country'] == 'N/A' ? 'Nowhere' : $json['Country']) )
			->setReleaseDate( ($json['Released'] == 'N/A' ? new \DateTime() : new \DateTime($json['Released'])) )
			->setMainPicture( ($json['Poster'] == 'N/A' ? 'http://i0.kym-cdn.com/photos/images/original/001/329/453/ba0.jpg' : $json['Poster'] ) )
			->setCategory($category)
			->setAuthor('On fait ça parce que on doit faire ça...');
		$shows[] = $show;
		return $shows;
	}

	public function getName()
	{
		return 'IMDB API';
	}
}