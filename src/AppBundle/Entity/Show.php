<?php

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ShowRepository")
 * @ORM\Table(name="s_show")
 */
class Show
{

    const DATA_SOURCE_OMDB = 'In OMDB';
    const DATA_SOURCE_DB = 'In local database';

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

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
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Category
     */
    public function getCategory()
    {
        return $this->category;
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
     * @return mixed
     */
    public function getAbstract()
    {
        return $this->abstract;
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
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
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
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param mixed $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getReleaseDate()
    {
        return $this->releaseDate;
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
     * @return mixed
     */
    public function getMainPicture()
    {
        return $this->mainPicture;
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
     * @ORM\ManyToOne(targetEntity="Category")
     * @ORM\JoinColumn(name="category_id",referencedColumnName="id")
     * @Assert\NotBlank(groups={"create","update"})
     */
    private $category;

    /**
     * @ORM\Column
     * @Assert\NotBlank(groups={"create","update"})
     */
    private $name;

    /**
     * @ORM\Column(type="text")
     * @Assert\NotBlank(groups={"create","update"})
     */
    private $abstract;
    /**
     * @ORM\Column
     * @Assert\NotBlank(groups={"create","update"})
     */
    private $country;
    /**
     * @ORM\Column
     * @Assert\NotBlank(groups={"create","update"})
     */
    private $author;
    /**
     * @ORM\Column(type="date")
     * @Assert\NotBlank(groups={"create","update"})
     */
    private $releaseDate;
    /**
     * @ORM\Column
     * @Assert\Image(minHeight=300, minWidth=750, groups={"create"})
     */
    private $mainPicture;

    private $tmpPicture;

    /**
     * @return mixed
     */
    public function getTmpPicture()
    {
        return $this->tmpPicture;
    }

    /**
     * @param mixed $tmpPicture
     */
    public function setTmpPicture($tmpPicture)
    {
        $this->tmpPicture = $tmpPicture;

        return $this;
    }

    /**
     * @ORM\Column(options={"default":"In local database"})
     */
    private $dataSource;

    public function getDateSource()
    {
        return $this->dataSource;
    }

    public function setDataSource($dataSource)
    {
        $this->dataSource = $dataSource;

        return $this;
    }
}