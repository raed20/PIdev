<?php

namespace App\Repository;

use App\Entity\Product;
use App\Model\SearchDataProduct;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Knp\Component\Pager\Pagination\PaginationInterface;
use Knp\Component\Pager\PaginatorInterface;

/**
 * @extends ServiceEntityRepository<Product>
 *
 * @method Product|null find($id, $lockMode = null, $lockVersion = null)
 * @method Product|null findOneBy(array $criteria, array $orderBy = null)
 * @method Product[]    findAll()
 * @method Product[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry,private PaginatorInterface $paginatorInterface)
    {
        parent::__construct($registry, Product::class);
    }

    public function findBySearch(SearchDataProduct $searchData):PaginationInterface
    {
        $data=$this->createQueryBuilder('p')
            ->where('p.name LIKE :name')
            ->setParameter('name', "%{$searchData->prod}%");
        if(!empty($searchData->prod)){
            $data=$data
                ->andWhere('p.name LIKE :prod')
                ->setParameter('prod',"%{$searchData->prod}%");
        } 
        $data= $data
            ->getQuery()   
            ->getResult();
            $blog = $this->paginatorInterface->paginate($data, $searchData->page, 9);
        return $blog ;
    }

//    /**
//     * @return Product[] Returns an array of Product objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Product
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
