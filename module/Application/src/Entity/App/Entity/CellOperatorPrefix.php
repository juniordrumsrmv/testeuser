<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CellOperatorPrefix
 *
 * @ORM\Table(name="cell_operator_prefix", uniqueConstraints={@ORM\UniqueConstraint(name="index_prefix", columns={"operator_key", "operator_ddd", "operator_prefix"})})
 * @ORM\Entity
 */
class CellOperatorPrefix
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
     * @ORM\Column(name="operator_ddd", type="string", length=2, nullable=true)
     */
    private $operatorDdd;

    /**
     * @var string
     *
     * @ORM\Column(name="operator_prefix", type="string", length=4, nullable=true)
     */
    private $operatorPrefix;


}

