<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Call_offer
 *
 * @ORM\Table(name="call_offer")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CallOfferRepository")
 */
class CallOffer extends AlertProcedure
{
    /**
     * Constructor
     */
    public function __construct() {
        parent::__construct();
    }
}

