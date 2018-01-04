<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cfop
 *
 * @ORM\Table(name="cfop")
 * @ORM\Entity
 */
class Cfop
{
    /**
     * @var integer
     *
     * @ORM\Column(name="cfop_from", type="integer", nullable=false)
     */
    private $cfopFrom;

    /**
     * @var integer
     *
     * @ORM\Column(name="cfop_to", type="integer", nullable=false)
     */
    private $cfopTo;

    /**
     * @var string
     *
     * @ORM\Column(name="cfop_desc", type="string", length=50, nullable=true)
     */
    private $cfopDesc;


}

