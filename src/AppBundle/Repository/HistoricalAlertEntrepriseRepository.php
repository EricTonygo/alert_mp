<?php

namespace AppBundle\Repository;

/**
 * HistoricalAlertEntrepriseRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class HistoricalAlertEntrepriseRepository extends \Doctrine\ORM\EntityRepository
{
    public function deleteHistoricalAlertEntreprise(\AppBundle\Entity\HistoricalAlertEntreprise $historicalAlertEntreprise) {
        $em= $this->_em;
        $historicalAlertEntreprise->setStatus(0);
        $em->getConnection()->beginTransaction();
        try{
            $em->persist($historicalAlertEntreprise);
            $em->flush();
            $em->getConnection()->commit();
        } catch (Exception $ex) {
            $em->getConnection()->rollback();
            $em->close();
            throw $ex;
        }
    }


    public function saveHistoricalAlertEntreprise(\AppBundle\Entity\HistoricalAlertEntreprise $historicalAlertEntreprise) {
        $em= $this->_em;
        $historicalAlertEntreprise->setStatus(1);
        $em->getConnection()->beginTransaction();
        try{
            $em->persist($historicalAlertEntreprise);
            $em->flush();
            $em->getConnection()->commit();
        } catch (Exception $ex) {
            $em->getConnection()->rollback();
            $em->close();
            throw $ex;
        }
    }

    public function updateHistoricalAlertEntreprise(\AppBundle\Entity\HistoricalAlertEntreprise $historicalAlertEntreprise) {
        $em= $this->_em;
        $em->getConnection()->beginTransaction();
        try{
            $em->persist($historicalAlertEntreprise);
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
        $qb = $this->createQueryBuilder('c');
        $qb->where('c.status = :status')
           ->setParameter('status', 1);
        return $qb->getQuery()->getResult();
    }
    
    public function getHistoricalAlertEntrepriseQueryBuilder() {
         return $this
          ->createQueryBuilder('c')
          ->where('c.status = :status')
          ->setParameter('status', 1);

    }
}
