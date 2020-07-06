<?php

namespace App\Repository;

use App\Entity\Slider;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Slider|null find($id, $lockMode = null, $lockVersion = null)
 * @method Slider|null findOneBy(array $criteria, array $orderBy = null)
 * @method Slider[]    findAll()
 * @method Slider[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SliderRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Slider::class);
    }

    public function findAllUsed()
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.isUsed = :val')
            ->setParameter('val', 1)
            ->orderBy('s.createdAt', 'ASC')
            ->getQuery()
            ->getResult()
            ;
    }
    // /**
    //  * @return Slider[] Returns an array of Slider objects
    //  */
    /*
    public function findByExampleField($value)
    {

    }
    */

    /*
    public function findOneBySomeField($value): ?Slider
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
