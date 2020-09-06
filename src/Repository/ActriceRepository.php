<?php

namespace App\Repository;

use App\Entity\Actrice;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Actrice|null find($id, $lockMode = null, $lockVersion = null)
 * @method Actrice|null findOneBy(array $criteria, array $orderBy = null)
 * @method Actrice[]    findAll()
 * @method Actrice[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ActriceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Actrice::class);
    }

    // /**
    //  * @return Actrice[] Returns an array of Actrice objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Actrice
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
