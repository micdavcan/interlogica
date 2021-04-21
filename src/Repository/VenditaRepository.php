<?php

namespace App\Repository;

use App\Entity\Vendita;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Vendita|null find($id, $lockMode = null, $lockVersion = null)
 * @method Vendita|null findOneBy(array $criteria, array $orderBy = null)
 * @method Vendita[]    findAll()
 * @method Vendita[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VenditaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Vendita::class);
    }

    // /**
    //  * @return Vendita[] Returns an array of Vendita objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('v.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Vendita
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
    
}
