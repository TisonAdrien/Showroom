<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 */
class Media
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
    private $file;

    /**
     * @ORM\Column
     */
    private $path;



    public function getFile(){
        return $this->file;
    }

    public function getPath()
    {
        return $this->path;
    }

    public function setFile($file)
    {
        $this->file = $file;
        return $this;
    }

    public function setPath($path)
    {
        $this->path = $path;
        return $this;
    }
}