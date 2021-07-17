<?php

namespace App\Repository;

use App\Entity\CreationDate;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CreationDate|null find($id, $lockMode = null, $lockVersion = null)
 * @method CreationDate|null findOneBy(array $criteria, array $orderBy = null)
 * @method CreationDate[]    findAll()
 * @method CreationDate[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CreationDateRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CreationDate::class);
    }

    // /**
    //  * @return CreationDate[] Returns an array of CreationDate objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CreationDate
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
