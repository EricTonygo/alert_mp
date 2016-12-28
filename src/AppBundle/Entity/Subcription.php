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
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set periodicite
     *
     * @param integer $periodicite
     *
     * @return Subcription
     */
    public function setPeriodicite($periodicity)
    {
        $this->periodicite = $periodicity;

        return $this;
    }

    /**
     * Get periodicite
     *
     * @return int
     */
    public function getPeriodicite()
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
}

