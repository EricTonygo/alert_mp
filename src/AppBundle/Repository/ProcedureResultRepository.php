<?php

namespace AppBundle\Repository;

/**
 * ProcedureResultRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProcedureResultRepository extends \Doctrine\ORM\EntityRepository
{
    public function deleteProcedureResult(\AppBundle\Entity\ProcedureResult $procedureResult) {
        $em= $this->_em;
        $procedureResult->setStatus(0);
        $em->getConnection()->beginTransaction();
        try{
            $em->persist($procedureResult);
            $em->flush();
            $em->getConnection()->commit();
        } catch (Exception $ex) {
            $em->getConnection()->rollback();
            $em->close();
            throw $ex;
        }
    }


    public function saveProcedureResult(\AppBundle\Entity\ProcedureResult $procedureResult) {
        $em= $this->_em;
        $procedureResult->setStatus(1);
        $em->getConnection()->beginTransaction();
        try{
            $em->persist($procedureResult);
            $em->flush();
            $em->getConnection()->commit();
        } catch (Exception $ex) {
            $em->getConnection()->rollback();
            $em->close();
            throw $ex;
        }
    }

    public function updateProcedureResult(\AppBundle\Entity\ProcedureResult $procedureResult) {
        $em= $this->_em;
        $em->getConnection()->beginTransaction();
        try{
            $em->persist($procedureResult);
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
        $qb = $this->createQueryBuilder('p');
        $qb->where('p.status = :status')
           ->setParameter('status', 1);
        return $qb->getQuery()->getResult();
    }
    
    public function getProcedureResultQueryBuilder() {
         return $this
          ->createQueryBuilder('p')
          ->where('p.status = :status')
          ->setParameter('status', 1);

    }
}
