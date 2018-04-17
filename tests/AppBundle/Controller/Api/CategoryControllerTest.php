<?php

namespace Tests\AppBundle\Controller\Api;

use Tests\AppBundle\Controller\AbstractControllerTest;

class CategoryControllerTest extends AbstractControllerTest
{
	public function testListCategoriesAction()
	{
		$this->client->request(
			'GET',
			'/api/categories',
			array(),
			array(),
			array(
				'CONTENT_TYPE'  => 'application/json',
				'HTTP_X_USERNAME' => $this->username,
				'HTTP_X_PASSWORD' => $this->password
			)
		);

		$expected = '[{"id":2,"name":"Comedy"},{"id":1,"name":"Drama"}]';
		$this->assertSame(gettype($expected), gettype($this->client->getResponse()->getContent()));
	}
}