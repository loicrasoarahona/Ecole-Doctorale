<?php

namespace App\Repository;

use App\Entity\EquipeAccueil;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<EquipeAccueil>
 *
 * @method EquipeAccueil|null find($id, $lockMode = null, $lockVersion = null)
 * @method EquipeAccueil|null findOneBy(array $criteria, array $orderBy = null)
 * @method EquipeAccueil[]    findAll()
 * @method EquipeAccueil[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EquipeAccueilRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EquipeAccueil::class);
    }

    public function save(EquipeAccueil $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(EquipeAccueil $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return EquipeAccueil[] Returns an array of EquipeAccueil objects
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

//    public function findOneBySomeField($value): ?EquipeAccueil
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
