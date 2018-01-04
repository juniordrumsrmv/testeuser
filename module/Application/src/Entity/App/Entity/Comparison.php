<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comparison
 *
 * @ORM\Table(name="comparison")
 * @ORM\Entity
 */
class Comparison
{
    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="smallint", nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=64, nullable=true)
     */
    private $label;

    /**
     * @var string
     *
     * @ORM\Column(name="f1_data", type="string", length=80, nullable=true)
     */
    private $f1Data;

    /**
     * @var string
     *
     * @ORM\Column(name="f2_data", type="string", length=80, nullable=true)
     */
    private $f2Data;

    /**
     * @var string
     *
     * @ORM\Column(name="f3_data", type="string", length=80, nullable=true)
     */
    private $f3Data;

    /**
     * @var string
     *
     * @ORM\Column(name="f4_data", type="string", length=80, nullable=true)
     */
    private $f4Data;

    /**
     * @var string
     *
     * @ORM\Column(name="f5_data", type="string", length=80, nullable=true)
     */
    private $f5Data;

    /**
     * @var string
     *
     * @ORM\Column(name="to_data", type="string", length=80, nullable=true)
     */
    private $toData;


}

