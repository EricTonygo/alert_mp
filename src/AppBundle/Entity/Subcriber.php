<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Subcriber
 *
 * @ORM\Table(name="subcriber")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SubscriberRepository")
 */
class Subscriber
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="phone_number", type="string", length=255)
     */
    private $phoneNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255)
     */
    private $status;

    /**
     * @var int
     *
     * @ORM\Column(name="state", type="integer")
     */
    private $state;
    
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
     * @var \Subcription
     *
     * @ORM\ManyToOne(targetEntity="Subcription")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="subcription", referencedColumnName="id")
     * })
     */
    private $subcription;
    
    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\HistoricalAlertSubscriber", mappedBy="subscriber", cascade={"remove", "persist"})
     */
    private $historicalAlertSubscribers;
    
    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="SpecialFollowUp", inversedBy="subscribers", cascade={"persist"})
     * 
     */
    private $specialFollowUps;

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
     * Set name
     *
     * @param string $name
     *
     * @return Subscriber
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Subscriber
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set phoneNumber
     *
     * @param string $phoneNumber
     *
     * @return Subscriber
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Get phoneNumber
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Subscriber
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set state
     *
     * @param integer $state
     *
     * @return Subscriber
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }
    
    /**
     * Set entreprise
     *
     * @param AppBundle\Entity\Entrprise $entreprise
     *
     * @return Subscriber
     */
    public function setEntreprise($entreprise)
    {
        $this->entreprise = $entreprise;

        return $this;
    }

    /**
     * Get entreprise
     *
     * @return AppBundle\Entity\Entreprise
     */
    public function getEntreprise()
    {
        return $this->entreprise;
    }
    
    
    /**
     * Set subscription
     *
     * @param AppBundle\Entity\Subscription $subscription
     *
     * @return Subscriber
     */
    public function setSubscription($subscription)
    {
        $this->subcription = $subscription;

        return $this;
    }

    /**
     * Get subscription
     *
     * @return AppBundle\Entity\Subscription
     */
    public function getSubscription()
    {
        return $this->subcription;
    }
    
    /**
     * Add historicalAlertSubscriber
     *
     * @param AppBundle\Entity\HistoricalAlertSubscriber $historicalAlertSubscriber
     * @return Subscriber
     */
    public function addHistoricalAlertSubscriber(AppBundle\Entity\HistoricalAlertSubscriber $historicalAlertSubscriber) {
        $this->historicalAlertSubscribers[] = $historicalAlertSubscriber;
        return $this;
    }

    /**
     * Get historicalAlertSubscribers
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getHistoricalAlertSubscribers() {
        return $this->historicalAlertSubscribers;
    }

    /**
     * Set historicalAlertSubscribers
     *
     * @param \Doctrine\Common\Collections\Collection $historicalAlertSubscribers
     * @return Subscriber
     */
    public function setHistoricalAlertSubscribers(\Doctrine\Common\Collections\Collection $historicalAlertSubscribers = null) {
        $this->historicalAlertSubscribers = $historicalAlertSubscribers;

        return $this;
    }

    /**
     * Remove historicalAlertSubscribers
     *
     * @param AppBundle\Entity\HistoricalAlertSubscriber $historicalAlertSubscriber
     * @return Subscriber
     */
    public function removeHistoricalAlertSubscriber(AppBundle\Entity\HistoricalAlertSubscriber $historicalAlertSubscriber) {
        $this->historicalAlertSubscribers->removeElement($historicalAlertSubscriber);
        return $this;
    }
    
    
    /**
     * Add specialFollowUp
     *
     * @param AppBundle\Entity\SpecialFollowUp $specialFollowUp
     * @return Subscriber
     */
    public function addSpecialFollowUp(AppBundle\Entity\SpecialFollowUp $specialFollowUp) {
        $this->specialFollowUps[] = $specialFollowUp;
        return $this;
    }

    /**
     * Get specialFollowUps
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSpecialFollowUps() {
        return $this->specialFollowUps;
    }

    /**
     * Set specialFollowUps
     *
     * @param \Doctrine\Common\Collections\Collection $specialFollowUps
     * @return Subscriber
     */
    public function setSpecialFollowUps(\Doctrine\Common\Collections\Collection $specialFollowUps = null) {
        $this->specialFollowUps = $specialFollowUps;

        return $this;
    }

    /**
     * Remove specialFollowUps
     *
     * @param AppBundle\Entity\SpecialFollowUp $specialFollowUp
     * @return Subscriber
     */
    public function removeSpecialFollowUp(AppBundle\Entity\SpecialFollowUp $specialFollowUp) {
        $this->entreprises->removeElement($specialFollowUp);
        return $this;
    }
}

