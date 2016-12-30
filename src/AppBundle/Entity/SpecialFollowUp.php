<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpecialFollowUp
 *
 * @ORM\Table(name="special_follow_up")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SpecialFollowUpRepository")
 */
class SpecialFollowUp
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
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer")
     */
    private $status;
    
    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Subscriber", inversedBy="specialFollowUps", cascade={"persist"})
     * 
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
     * Set name
     *
     * @param string $name
     *
     * @return SpecialFollowUp
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
     * Set description
     *
     * @param string $description
     *
     * @return SpecialFollowUp
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
    
    /**
     * Set status
     *
     * @param integer $status
     *
     * @return SpecialFollowUp
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
     * Add subscriber
     *
     * @param AppBundle\Entity\Subscriber $subscriber
     * @return SpecialFollowUp
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
     * @return SpecialFollowUp
     */
    public function setSubscribers(\Doctrine\Common\Collections\Collection $subscribers = null) {
        $this->subscribers = $subscribers;

        return $this;
    }

    /**
     * Remove subscribers
     *
     * @param AppBundle\Entity\Subscriber $subscriber
     * @return SpecialFollowUp
     */
    public function removeSubscriber(AppBundle\Entity\Subscriber $subscriber) {
        $this->entreprises->removeElement($subscriber);
        return $this;
    }
}

