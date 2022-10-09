<?php

namespace App\Repository;

use App\Entity\EcoleDoctorale;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<EcoleDoctorale>
 *
 * @method EcoleDoctorale|null find($id, $lockMode = null, $lockVersion = null)
 * @method EcoleDoctorale|null findOneBy(array $criteria, array $orderBy = null)
 * @method EcoleDoctorale[]    findAll()
 * @method EcoleDoctorale[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EcoleDoctoraleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EcoleDoctorale::class);
    }

    public function save(EcoleDoctorale $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(EcoleDoctorale $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return EcoleDoctorale[] Returns an array of EcoleDoctorale objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('e.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?EcoleDoctorale
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
