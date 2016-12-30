<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ExpressionInterest
 *
 * @ORM\Table(name="expression_interest")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ExpressionInterestRepository")
 */
class ExpressionInterest extends AlertProcedure
{
    /**
     * Constructor
     */
    public function __construct() {
        parent::__construct();
    }
}

