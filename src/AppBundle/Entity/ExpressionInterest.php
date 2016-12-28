<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Expression_interest
 *
 * @ORM\Table(name="expression_interest")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ExpressionOfnterestRepository")
 */
class ExpressionOfInterest extends AlertProcedure
{
    /**
     * Constructor
     */
    public function __construct() {
        parent::__construct();
    }
}

