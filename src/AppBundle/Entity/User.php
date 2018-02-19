<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table
 * @UniqueEntity("email")
 */
class User implements UserInterface
{
	/**
	 * @ORM\Id
	 * @ORM\GeneratedValue
	 * @ORM\Column(type="integer")
	 */
	private $id;

	/**
	 * @ORM\Column
	 */
	private $fullname;

	public function getFullname()
	{
		return $this->fullname;
	}

	public function setFullname($fullname)
	{
		$this->fullname = $fullname;
		return $this;
	}

	private $roles;

	public function getRoles()
	{
		return ['ROLE_USER'];
	}


	/**
	 * @ORM\Column
	 */
	private $password;

	public function getPassword()
	{
		return $this->password;
	}

	public function setPassword($password)
	{
		$this->password = $password;
		return $this;
	}


	public function getSalt()
	{
		//Nothing to do
	}

	/**
	 * @ORM\Column
	 * @Assert\Email()
	 */
	private $email;

	public function getUsername()
	{
		return $this->email;
	}

	public function setUsername($email)
	{
		$this->email = $email;
		return $this;
	}

	public function eraseCredentials()
	{
		// Nothing to do
	}	


}