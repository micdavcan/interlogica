<?php

namespace App\Repository;

use App\Entity\Ingredienti;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Ingredienti|null find($id, $lockMode = null, $lockVersion = null)
 * @method Ingredienti|null findOneBy(array $criteria, array $orderBy = null)
 * @method Ingredienti[]    findAll()
 * @method Ingredienti[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class IngredientiRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Ingredienti::class);
    }

    // /**
    //  * @return Ingredienti[] Returns an array of Ingredienti objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Ingredienti
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
