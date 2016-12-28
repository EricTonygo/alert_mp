<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Additive
 *
 * @ORM\Table(name="additive")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AdditiveRepository")
 */
class Additive extends AlertProcedure
{
    /**
     * Contructor
     */
    public function __construct() {
        parent::__construct();
    }
}

