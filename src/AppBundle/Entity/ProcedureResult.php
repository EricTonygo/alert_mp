<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Result
 *
 * @ORM\Table(name="procedure_result")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProcedureResultRepository")
 */
class ProcedureResult extends AlertProcedure
{
    /**
     * Constructor
     */
    public function __construct() {
        parent::__construct();
    }
}

