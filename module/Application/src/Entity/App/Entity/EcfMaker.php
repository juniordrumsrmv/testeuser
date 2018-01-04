<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EcfMaker
 *
 * @ORM\Table(name="ecf_maker")
 * @ORM\Entity
 */
class EcfMaker
{
    /**
     * @var string
     *
     * @ORM\Column(name="ecf_manufacturer", type="string", length=40, nullable=false)
     */
    private $ecfManufacturer;

    /**
     * @var string
     *
     * @ORM\Column(name="code_ff", type="string", length=4, nullable=false)
     */
    private $codeFf;


}

