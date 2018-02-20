<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use JMS\Serializer\Annotation as JMS;


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
     *
     * @JMS\Expose
     */
    private $name;

    public function getName()
    {
        return $this->name;
    }

    public function setName($pName)
    {
        $this->name = $pName;
    }
}