<?php

namespace Tests\AppBundle\ShowFinder;

use AppBundle\Entity\Category;
use AppBundle\Entity\Show;
use AppBundle\Entity\User;
use AppBundle\ShowFinder\OMDBShowFinder;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage;

class OMDBShowFinderTest extends TestCase
{
	public function testOMDBReturnsNoShows()
	{
		$client = $this
						->getMockBuilder(Client::class)
						->disableOriginalConstructor()
						->getMock()
					;
		$results = $this
						->getMockBuilder(Response::class)
						->disableOriginalConstructor()
						->getMock()
					;
		$tokenStorage = $this
							->createMock(TokenStorage::class)
						;
		$apiKey = "";

		$results->method('getBody')->willReturn(json_encode(['Response' => 'False', 'Error' => 'Series not found!']));

		$client
				->method('__call')
				->with($this->equalTo('get'))
				->willReturn($results)
		;

		$omdbShowFinder = new OMDBShowFinder($client, $tokenStorage, $apiKey);

		$query = "";

		$results = $omdbShowFinder->findAllWithName($query);

		$this->assertSame([], $results);
	}

	public function testOMDBFindShows()
	{
		$client = $this
						->getMockBuilder(Client::class)
						->disableOriginalConstructor()
						->getMock()
					;
		$results = $this
						->getMockBuilder(Response::class)
						->disableOriginalConstructor()
						->getMock()
					;
		$tokenStorage = $this
							->createMock(TokenStorage::class)
						;

		$token = $this
						->createMock(UsernamePasswordToken::class)
					;

		$user = new User();

		$token->method('getUser')->willReturn($user);

		$tokenStorage->method('getToken')->willReturn($token);

		$apiKey = "";

		$results->method('getBody')->willReturn('{"Title":"RED","Year":"2010","Rated":"PG-13","Released":"15 Oct 2010","Runtime":"111 min","Genre":"Action, Comedy, Crime","Director":"Robert Schwentke","Writer":"Jon Hoeber (screenplay), Erich Hoeber (screenplay), Warren Ellis (graphic novel), Cully Hamner (graphic novel)","Actors":"Bruce Willis, Mary-Louise Parker, Heidi von Palleske, Karl Urban","Plot":"When his peaceful life is threatened by a high-tech assassin, former black-ops agent Frank Moses reassembles his old team in a last ditch effort to survive and uncover his assailants.","Language":"English, Russian","Country":"USA","Awards":"Nominated for 1 Golden Globe. Another 4 wins & 18 nominations.","Poster":"https://ia.media-imdb.com/images/M/MV5BMzg2Mjg1OTk0NF5BMl5BanBnXkFtZTcwMjQ4MTA3Mw@@._V1_SX300.jpg","Ratings":[{"Source":"Internet Movie Database","Value":"7.1/10"},{"Source":"Rotten Tomatoes","Value":"70%"},{"Source":"Metacritic","Value":"60/100"}],"Metascore":"60","imdbRating":"7.1","imdbVotes":"259,454","imdbID":"tt1245526","Type":"movie","DVD":"25 Jan 2011","BoxOffice":"$88,900,000","Production":"Summit Entertainment","Website":"http://red-themovie.com/","Response":"True"}');


		$expectedCategory = new Category();
		$expectedCategory->setName( "Action, Comedy, Crime" );

		$expectedShow = new Show();
		$expectedShow
			->setName("RED")
			->setDataSource(Show::DATA_SOURCE_OMDB)
			->setAbstract("When his peaceful life is threatened by a high-tech assassin, former black-ops agent Frank Moses reassembles his old team in a last ditch effort to survive and uncover his assailants.")
			->setCountry("USA")
			->setReleaseDate( new \DateTime("15 Oct 2010") )
			->setMainPicture( "https://ia.media-imdb.com/images/M/MV5BMzg2Mjg1OTk0NF5BMl5BanBnXkFtZTcwMjQ4MTA3Mw@@._V1_SX300.jpg" )
			->setCategory($expectedCategory)
			->setAuthor($user);


		$client
				->method('__call')
				->with($this->equalTo('get'))
				->willReturn($results)
		;

		$omdbShowFinder = new OMDBShowFinder($client, $tokenStorage, $apiKey);

		$query = "RED";

		$results = $omdbShowFinder->findAllWithName($query);

		$this->assertEquals([ '0' => $expectedShow ], $results);
	}
}