<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as JMS;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ShowRepository")
 * @ORM\Table(name="s_show")
 *
 * @JMS\ExclusionPolicy("none")
 */
class Show
{

    const DATA_SOURCE_OMDB = 'In OMDB';
    const DATA_SOURCE_DB = 'In local database';

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     *
     * @JMS\Groups({"show"})
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Category")
     * @ORM\JoinColumn(name="category_id",referencedColumnName="id")
     * @Assert\NotBlank(groups={"create","update"})
     *
     * @JMS\Groups({"show", "show_create"})
     */
    private $category;

    /**
     * @ORM\Column
     * @Assert\NotBlank(groups={"create","update"})
     *
     * @JMS\Groups({"show", "show_create"})
     */
    private $name;

    /**
     * @ORM\Column(type="text")
     * @Assert\NotBlank(groups={"create","update"})
     *
     * @JMS\Groups({"show", "show_create"})
     */
    private $abstract;

    /**
     * @ORM\Column
     * @Assert\NotBlank(groups={"create","update"})
     *
     * @JMS\Groups({"show", "show_create"})
     */
    private $country;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="shows")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * @Assert\NotBlank(groups={"create","update"})
     *
     * @JMS\Groups({"show", "show_create"})
     */
    private $author;

    /**
     * @ORM\Column(type="date")
     * @Assert\NotBlank(groups={"create","update"})
     *
     * @JMS\Groups({"show", "show_create"})
     */
    private $releaseDate;
    
    /**
     * @ORM\Column
     * @Assert\Image(minHeight=300, minWidth=750, groups={"create"})
     *
     * @JMS\Groups({"show_create"})
     */
    private $mainPicture;

    private $tmpPicture;

    /**
     * @ORM\Column(options={"default":"In local database"})
     *
     * @JMS\Exclude
     */
    private $dataSource;


    public function update(Show $show)
    {
        $this->setName($show->getName());
        $this->setCategory($show->getCategory());
        $this->setAbstract($show->getAbstract());
        $this->setCountry($show->getCountry());
        $this->setAuthor($show->getAuthor());
        $this->setReleaseDate($show->getReleaseDate());
    }
    

    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * @return Category
     */
    public function getCategory()
    {
        return $this->category;
    }


    /**
     * @return mixed
     */
    public function getAbstract()
    {
        return $this->abstract;
    }


    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }


    /**
     * @return User
     */
    public function getAuthor()
    {
        return $this->author;
    }


    /**
     * @return \DateTime
     */
    public function getReleaseDate()
    {
        return $this->releaseDate;
    }
    /**
     * @return mixed
     */
    public function getMainPicture()
    {
        return $this->mainPicture;
    }

    /**
     * @return mixed
     */
    public function getTmpPicture()
    {
        return $this->tmpPicture;
    }
    
    public function getDataSource()
    {
        return $this->dataSource;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
    /**
     * @param Category $category
     */
    public function setCategory(Category $category)
    {
        $this->category = $category;

        return $this;
    }
    /**
     * @param mixed $abstract
     */
    public function setAbstract($abstract)
    {
        $this->abstract = $abstract;

        return $this;
    }
    /**
     * @param mixed $country
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }
    /**
     * @param User $author
     */
    public function setAuthor(User $author)
    {
        $this->author = $author;

        return $this;
    }
    /**
     * @param \DateTime $releaseDate
     */
    public function setReleaseDate(\DateTime $releaseDate)
    {
        $this->releaseDate = $releaseDate;

        return $this;
    }


    /**
     * @param mixed $mainPicture
     */
    public function setMainPicture($mainPicture)
    {
        $this->mainPicture = $mainPicture;

        return $this;
    }



    /**
     * @param mixed $tmpPicture
     */
    public function setTmpPicture($tmpPicture)
    {
        $this->tmpPicture = $tmpPicture;

        return $this;
    }


    public function setDataSource($dataSource)
    {
        $this->dataSource = $dataSource;

        return $this;
    }
}