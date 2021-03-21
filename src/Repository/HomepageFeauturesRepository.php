<?php

namespace App\Repository;

use App\Entity\HomepageFeautures;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method HomepageFeautures|null find($id, $lockMode = null, $lockVersion = null)
 * @method HomepageFeautures|null findOneBy(array $criteria, array $orderBy = null)
 * @method HomepageFeautures[]    findAll()
 * @method HomepageFeautures[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HomepageFeauturesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, HomepageFeautures::class);
    }

    // /**
    //  * @return HomepageFeautures[] Returns an array of HomepageFeautures objects
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
    public function findOneBySomeField($value): ?HomepageFeautures
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
