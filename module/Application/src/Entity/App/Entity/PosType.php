<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PosType
 *
 * @ORM\Table(name="pos_type")
 * @ORM\Entity
 */
class PosType
{
    /**
     * @var integer
     *
     * @ORM\Column(name="pos_type_key", type="smallint", nullable=false)
     */
    private $posTypeKey;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=true)
     */
    private $name;


}

