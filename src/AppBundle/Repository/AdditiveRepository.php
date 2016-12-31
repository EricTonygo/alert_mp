<?php

namespace AppBundle\Repository;


use Doctrine\ORM\EntityRepository;
/**
 * AdditiveRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class AdditiveRepository extends EntityRepository
{
    public function deleteAdditive(\AppBundle\Entity\Additive $additive) {
        $em= $this->_em;
        $additive->setStatus(0);
        $em->getConnection()->beginTransaction();
        try{
            $em->persist($additive);
            $em->flush();
            $em->getConnection()->commit();
        } catch (Exception $ex) {
            $em->getConnection()->rollback();
            $em->close();
            throw $ex;
        }
    }


    public function saveAdditive(\AppBundle\Entity\Additive $additive) {
        $em= $this->_em;
        $additive->setStatus(1);
        $em->getConnection()->beginTransaction();
        try{
            $em->persist($additive);
            $em->flush();
            $em->getConnection()->commit();
        } catch (Exception $ex) {
            $em->getConnection()->rollback();
            $em->close();
            throw $ex;
        }
    }

    public function updateAdditive(\AppBundle\Entity\Additive $additive) {
        $em= $this->_em;
        $em->getConnection()->beginTransaction();
        try{
            $em->persist($additive);
            $em->flush();
            $em->getConnection()->commit();
        } catch (Exception $ex) {
            $em->getConnection()->rollback();
            $em->close();
            throw $ex;
        }
    }
    public function getAll() 
    {
        $qb = $this->createQueryBuilder('a');
        $qb->where('a.status = :status')
           ->setParameter('status', 1);
        return $qb->getQuery()->getResult();
    }
    
    public function getAdditiveQueryBuilder() {
         return $this
          ->createQueryBuilder('a')
          ->where('a.status = :status')
          ->setParameter('status', 1);

    }
}
