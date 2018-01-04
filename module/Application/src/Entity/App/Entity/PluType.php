<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PluType
 *
 * @ORM\Table(name="plu_type")
 * @ORM\Entity
 */
class PluType
{
    /**
     * @var integer
     *
     * @ORM\Column(name="plu_type", type="smallint", nullable=false)
     */
    private $pluType;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=true)
     */
    private $name;


}

