<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as JMS;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity
 * @UniqueEntity("name")
 *
 * @JMS\ExclusionPolicy("all")
 */
class Category
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(unique=true)
     * @Assert\NotBlank
     *
     * @JMS\Expose
     */
    private $name;

    public function update(Category $category)
    {
        $this->name = $category->name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($pName)
    {
        $this->name = $pName;
    }
}