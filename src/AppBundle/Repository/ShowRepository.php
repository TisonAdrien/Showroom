<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use AppBundle\Entity\Show;

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