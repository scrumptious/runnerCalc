<?php

namespace App\Repository;

use App\Entity\Runner;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Runner|null find($id, $lockMode = null, $lockVersion = null)
 * @method Runner|null findOneBy(array $criteria, array $orderBy = null)
 * @method Runner[]    findAll()
 * @method Runner[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RunnerRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Runner::class);
    }

//    /**
//     * @return Runner[] Returns an array of Runner objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Runner
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
