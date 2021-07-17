<?php

namespace App\Repository;

use App\Entity\Hikes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Hikes|null find($id, $lockMode = null, $lockVersion = null)
 * @method Hikes|null findOneBy(array $criteria, array $orderBy = null)
 * @method Hikes[]    findAll()
 * @method Hikes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HikesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Hikes::class);
    }

    // /**
    //  * @return Hikes[] Returns an array of Hikes objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('h.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Hikes
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
