<?php

namespace App\Repository;

use App\Entity\Investissement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Investissement>
 *
 * @method Investissement|null find($id, $lockMode = null, $lockVersion = null)
 * @method Investissement|null findOneBy(array $criteria, array $orderBy = null)
 * @method Investissement[]    findAll()
 * @method Investissement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InvestissementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Investissement::class);
    }

//    /**
//     * @return Investissement[] Returns an array of Investissement objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('i.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Investissement
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
