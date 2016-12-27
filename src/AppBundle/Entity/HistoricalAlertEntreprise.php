<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HistoricalAlertEntreprise
 *
 * @ORM\Table(name="historical_alert_entreprise")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\HistoricalAlertEntrepriseRepository")
 */
class HistoricalAlertEntreprise
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}

