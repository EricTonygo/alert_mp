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
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer")
     */
    private $status;
    
    /**
     * @var \Entreprise
     *
     * @ORM\ManyToOne(targetEntity="Entreprise")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="entreprise", referencedColumnName="id")
     * })
     */
    private $entreprise;
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text")
     */
    private $message;
    
    /**
     * @var string
     *
     * @ORM\Column(name="procedureType", type="string", length=255)
     */
    private $procedureType;
    
    /**
     * @var string
     *
     * @ORM\Column(name="alertType", type="string", length=255)
     */
    private $alertType;

    /**
     * Constructor
     */
    public function __construct() {
        $this->status = 1;
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * Set status
     *
     * @param integer $status
     *
     * @return HistoricalAlertEntreprise
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }
    
    /**
    * Set message
    *
    * @param string $message
    *
    * @return HistoricalAlertEntreprise
    */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }
    
    /**
     * Set alertType
     *
     * @param string $alertType
     *
     * @return HistoricalAlertEntreprise
     */
    public function setAlertType($alertType)
    {
        $this->alertType = $alertType;

        return $this;
    }

    /**
     * Get alertType
     *
     * @return string
     */
    public function getAlertType()
    {
        return $this->alertType;
    }
    
    /**
     * Set procedureType
     *
     * @param string $procedureType
     *
     * @return HistoricalAlertEntreprise
     */
    public function setProcedureType($procedureType)
    {
        $this->procedureType = $procedureType;

        return $this;
    }

    /**
     * Get procedureType
     *
     * @return string
     */
    public function getProcedureType()
    {
        return $this->procedureType;
    }
    
    
    /**
     * Set entreprise
     *
     * @param \NNGenie\InfosMatBundle\Entity\Entreprise $entreprise
     * @return HistoricalAlertEntreprise
     */
    public function setEntreprise(\NNGenie\InfosMatBundle\Entity\Entreprise $entreprise= null)
    {
        $this->entreprise= $entreprise;
        return $this;
    }
    
    /**
    * Get entreprise
    *
    * @return \NNGenie\InfosMatBundle\Entity\Entreprise 
    */
    public function getEntreprise()
    {
        return $this->entreprise;
    }
}

