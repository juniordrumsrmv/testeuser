<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OperationType
 *
 * @ORM\Table(name="operation_type")
 * @ORM\Entity
 */
class OperationType
{
    /**
     * @var integer
     *
     * @ORM\Column(name="operation_type_key", type="smallint", nullable=false)
     */
    private $operationTypeKey;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=128, nullable=true)
     */
    private $description;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ope_type", type="boolean", nullable=true)
     */
    private $opeType;

    /**
     * @var string
     *
     * @ORM\Column(name="observation", type="text", length=65535, nullable=true)
     */
    private $observation;

    /**
     * @var boolean
     *
     * @ORM\Column(name="op_signal", type="boolean", nullable=true)
     */
    private $opSignal;

    /**
     * @var boolean
     *
     * @ORM\Column(name="op_export", type="boolean", nullable=true)
     */
    private $opExport;


}

