<?php

namespace AppBundle\Repository;

/**
 * ExpressionInterestRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ExpressionInterestRepository extends \Doctrine\ORM\EntityRepository
{
    public function deleteExpressionInterest(\AppBundle\Entity\ExpressionInterest $expressionInterest) {
        $em= $this->_em;
        $expressionInterest->setStatut(0);
        $em->getConnection()->beginTransaction();
        try{
            $em->persist($expressionInterest);
            $em->flush();
            $em->getConnection()->commit();
        } catch (Exception $ex) {
            $em->getConnection()->rollback();
            $em->close();
            throw $ex;
        }
    }


    public function saveExpressionInterest(\AppBundle\Entity\ExpressionInterest $expressionInterest) {
        $em= $this->_em;
        $expressionInterest->setStatut(1);
        $em->getConnection()->beginTransaction();
        try{
            $em->persist($expressionInterest);
            $em->flush();
            $em->getConnection()->commit();
        } catch (Exception $ex) {
            $em->getConnection()->rollback();
            $em->close();
            throw $ex;
        }
    }

    public function updateExpressionInterest(\AppBundle\Entity\ExpressionInterest $expressionInterest) {
        $em= $this->_em;
        $em->getConnection()->beginTransaction();
        try{
            $em->persist($expressionInterest);
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
        $qb = $this->createQueryBuilder('e');
        $qb->where('e.status = :status')
           ->setParameter('status', 1);
        return $qb->getQuery()->getResult();
    }
    
    public function getExpressionInterestQueryBuilder() {
         return $this
          ->createQueryBuilder('e')
          ->where('e.status = :status')
          ->setParameter('status', 1);

    }
}
