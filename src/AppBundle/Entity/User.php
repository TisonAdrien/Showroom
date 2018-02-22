<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as JMS;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

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

	/**
	 * @ORM\Column(type="json_array")
	 * @Assert\NotBlank
	 * @JMS\Expose
	 * @JMS\Type("string")
	 * @JMS\Groups({"user_create"})
	 */
	private $roles;

	/**
	 * @ORM\Column
	 * @JMS\Groups({"user_create"})
	 * @JMS\Expose
	 * @Assert\NotBlank
	 */
	private $password;

	/**
	 * @ORM\Column
	 * @Assert\Email()
	 *
	 * @JMS\Groups({"user"})
	 * @JMS\Expose
	 */
	private $email;

	/**
	 * @ORM\OneToMany(targetEntity="Show", mappedBy="author")
	 */
	private $shows;


	public function __construct()
	{
		$this->shows = new ArrayCollection();
	}

	public function eraseCredentials()
	{
		// Nothing to do
	}

	public function getSalt()
	{
		//Nothing to do
	}

	public function getFullname()
	{
		return $this->fullname;
	}

	public function getRoles()
	{
		return $this->roles;
	}

	public function getPassword()
	{
		return $this->password;
	}

	public function getUsername()
	{
		return $this->email;
	}

	public function getShows()
	{
		return $this->shows;
	}

	public function setFullname($fullname)
	{
		$this->fullname = $fullname;
		return $this;
	}

	public function setRoles($roles)
	{
		$this->roles = $roles;
		return $this;
	}

	public function setPassword($password)
	{
		$this->password = $password;
		return $this;
	}

	public function setUsername($email)
	{
		$this->email = $email;
		return $this;
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

}