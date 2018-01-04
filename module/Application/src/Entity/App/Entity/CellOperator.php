<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CellOperator
 *
 * @ORM\Table(name="cell_operator")
 * @ORM\Entity
 */
class CellOperator
{
    /**
     * @var integer
     *
     * @ORM\Column(name="operator_key", type="smallint", nullable=false)
     */
    private $operatorKey;

    /**
     * @var string
     *
     * @ORM\Column(name="operator_name", type="string", length=50, nullable=true)
     */
    private $operatorName;


}

