<?php

namespace App\Repository;

use App\Entity\UniteTransversale;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<UniteTransversale>
 *
 * @method UniteTransversale|null find($id, $lockMode = null, $lockVersion = null)
 * @method UniteTransversale|null findOneBy(array $criteria, array $orderBy = null)
 * @method UniteTransversale[]    findAll()
 * @method UniteTransversale[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UniteTransversaleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UniteTransversale::class);
    }

    public function save(UniteTransversale $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(UniteTransversale $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return UniteTransversale[] Returns an array of UniteTransversale objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('u.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?UniteTransversale
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
