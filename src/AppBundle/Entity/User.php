<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as JMS;

/**
 * @ORM\Entity
 * @ORM\Table
 * @UniqueEntity("email")
 *
 * @JMS\ExclusionPolicy("all")
 */
class User implements UserInterface
{
	/**
	 * @ORM\Id
	 * @ORM\GeneratedValue
	 * @ORM\Column(type="integer")
	 *
	 * @JMS\Expose
	 * @JMS\Groups({"user"})
	 */
	private $id;

	/**
	 * @ORM\Column
	 * @Assert\NotBlank
	 *
	 * @JMS\Groups({"user", "show"})
	 * @JMS\Expose
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


	/**
	 * @ORM\Column(type="json_array")
	 * @Assert\NotBlank
	 * @JMS\Expose
	 * @JMS\Type("string")
	 * @JMS\Groups({"user_create"})
	 */
	private $roles;

	public function getRoles()
	{
		return $this->roles;
	}

	public function setRoles($roles)
	{
		$this->roles = $roles;
		return $this;
	}


	/**
	 * @ORM\Column
	 * @JMS\Groups({"user_create"})
	 * @JMS\Expose
	 * @Assert\NotBlank
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
	 *
	 * @JMS\Groups({"user"})
	 * @JMS\Expose
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

	/**
	 * @ORM\OneToMany(targetEntity="Show", mappedBy="author")
	 */
	private $shows;

	public function getShows()
	{
		return $this->shows;
	}

	public function addShow($show)
	{
		if(!$this->shows->contains($show))
			$this->shows->add($show);
	}

	public function removeShow($show)
	{
		if($this->shows->contains($show))
			$this->shows->remove($show);
	}

	public function __construct()
	{
		$this->shows = new ArrayCollection();
	}
}