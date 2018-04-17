<?php

namespace Tests\AppBundle\Controller;

use Tests\AppBundle\Controller\AbstractControllerTest;

class SecurityControllerTest extends AbstractControllerTest
{
	public function testLogin()
	{
		$crawler = $this->login();

        $this->assertContains('List of shows', $crawler->filter('h1')->text());

        // To show where we are at a moment in test.html for exemple
        //echo $this->client->getResponse()->getContent();
	}
}