<?php

namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

abstract class AbstractControllerTest extends WebTestCase
{
	protected $client;
    protected $username;
    protected $password;

	public function login()
	{
		$crawler = $this->client->request('GET', '/login');
		$crawler = $this->client->followRedirect();
        $form = $crawler->selectButton('Connection')->form();
        $crawler = $this->client->submit(
        	$form,
        	array(
        		'email' => $this->username,
        		'password' => $this->password
        	)
        );
        $crawler = $this->client->followRedirect();
        return $crawler;
	}

	public function setUp()
    {
    	$this->client = static::createClient();
        $this->username = 'commanda@uganda.de';
        $this->password = 'deway';
    }

    public function tearDown()
    {
    	$this->client = null;
    }
}