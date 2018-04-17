<?php

namespace Tests\AppBundle\Controller;

use Tests\AppBundle\Controller\AbstractControllerTest;

class CategoryControllerTest extends AbstractControllerTest
{
	public function testCreateCategory()
	{
		$crawler = $this->login();
        $this->assertContains('List of shows', $crawler->filter('h1')->text());
        $crawler = $this->client->request('GET', '/category/add');
        $form = $crawler->selectButton('Create')->form();
        $name = time();
        $crawler = $this->client->submit(
        	$form,
        	array(
        		'category[name]' => $name
        	)
        );
        $crawler = $this->client->followRedirect();

        $this->assertContains('You successfully added a new Category', $crawler->filter('html')->text());

        $link = $crawler->selectLink('Create category')->link();
        $crawler = $this->client->click($link);

        $this->assertContains('Create a new category', $crawler->filter('h1')->text());

	}
}