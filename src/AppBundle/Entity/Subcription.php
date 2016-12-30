<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Subcription
 *
 * @ORM\Table(name="subcription")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SubcriptionRepository")
 */
class Subcription
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
     * @var int
     *
     * @ORM\Column(name="periodicity", type="integer")
     */
    private $periodicity;

    /**
     * @var int
     *
     * @ORM\Column(name="price", type="bigint")
     */
    private $price;
    
    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255)
     */
    private $status;
    
    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Subscriber", mappedBy="subscriber", cascade={"remove", "persist"})
     */
    private $subscribers;
    
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
     * Set periodicity
     *
     * @param integer $periodicity
     *
     * @return Subcription
     */
    public function setPeriodicity($periodicity)
    {
        $this->periodicity = $periodicity;

        return $this;
    }

    /**
     * Get periodicity
     *
     * @return int
     */
    public function getPeriodicity()
    {
        return $this->periodicity;
    }

    /**
     * Set price
     *
     * @param integer $price
     *
     * @return Subcription
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return int
     */
    public function getPrice()
    {
        return $this->price;
    }
    
    /**
     * Set status
     *
     * @param string $status
     *
     * @return Subscription
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
     * Add subscriber
     *
     * @param AppBundle\Entity\Subscriber $subscriber 
     * @return Subscription
     */
    public function addSubscriber(AppBundle\Entity\Subscriber $subscriber) {
        $this->subscribers[] = $subscriber;
        return $this;
    }

    /**
     * Get subscribers
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSubscribers() {
        return $this->subscribers;
    }

    /**
     * Set subscribers
     *
     * @param \Doctrine\Common\Collections\Collection $subscribers
     * @return Subscription
     */
    public function setSubscribers(\Doctrine\Common\Collections\Collection $subscribers = null) {
        $this->subscribers = $subscribers;

        return $this;
    }

    /**
     * Remove subscriber
     *
     * @param AppBundle\Entity\Subscriber $subscriber
     * @return Subscription
     */
    public function removeSubscriber(AppBundle\Entity\Subscriber $subscriber) {
        $this->subscribers->removeElement($subscriber);
        return $this;
    }
}

