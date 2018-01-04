<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ncm
 *
 * @ORM\Table(name="ncm")
 * @ORM\Entity
 */
class Ncm
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ncm_key", type="bigint", nullable=false)
     */
    private $ncmKey;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ncm_ex", type="boolean", nullable=false)
     */
    private $ncmEx;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=60, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="unit", type="string", length=10, nullable=true)
     */
    private $unit;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ncm_table", type="boolean", nullable=true)
     */
    private $ncmTable;

    /**
     * @var string
     *
     * @ORM\Column(name="ncm_aliqnac", type="decimal", precision=5, scale=2, nullable=true)
     */
    private $ncmAliqnac;

    /**
     * @var string
     *
     * @ORM\Column(name="ncm_aliqimp", type="decimal", precision=5, scale=2, nullable=true)
     */
    private $ncmAliqimp;


}

