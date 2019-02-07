<?php

namespace App\Repository;

use App\Entity\Usager;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Usager|null find($id, $lockMode = null, $lockVersion = null)
 * @method Usager|null findOneBy(array $criteria, array $orderBy = null)
 * @method Usager[]    findAll()
 * @method Usager[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UsagerRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Usager::class);
    }

    // /**
    //  * @return Usager[] Returns an array of Usager objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Usager
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
