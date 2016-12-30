<?php

namespace AppBundle\Repository;

/**
 * EntrepriseRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class EntrepriseRepository extends \Doctrine\ORM\EntityRepository
{
    public function deleteEntreprise(\AppBundle\Entity\Entreprise $entreprise) {
        $em= $this->_em;
        $entreprise->setStatut(0);
        $em->getConnection()->beginTransaction();
        try{
            $em->persist($entreprise);
            $em->flush();
            $em->getConnection()->commit();
        } catch (Exception $ex) {
            $em->getConnection()->rollback();
            $em->close();
            throw $ex;
        }
    }


    public function saveEntreprise(\AppBundle\Entity\Entreprise $entreprise) {
        $em= $this->_em;
        $entreprise->setStatut(1);
        $em->getConnection()->beginTransaction();
        try{
            $em->persist($entreprise);
            $em->flush();
            $em->getConnection()->commit();
        } catch (Exception $ex) {
            $em->getConnection()->rollback();
            $em->close();
            throw $ex;
        }
    }

    public function updateEntreprise(\AppBundle\Entity\Entreprise $entreprise) {
        $em= $this->_em;
        $em->getConnection()->beginTransaction();
        try{
            $em->persist($entreprise);
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
    
    public function getEntrepriseQueryBuilder() {
         return $this
          ->createQueryBuilder('e')
          ->where('e.status = :status')
          ->setParameter('status', 1);

    }
}
