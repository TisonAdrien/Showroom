<?php

namespace AppBundle\Repository;

use AppBundle\Entity\Show;
use Doctrine\ORM\EntityRepository;

class ShowRepository extends EntityRepository
{

    /**
     * @param $name
     * @return Show[]
     */
    public function findAllWithName($name)
    {
        $qb = $this->createQueryBuilder('s')
            ->andWhere("LOWER(s.name) LIKE :name")
            ->setParameter('name', '%'.$name.'%')
            ->orderBy('s.name', 'ASC')
            ->getQuery();

        return $qb->execute();
    }
}