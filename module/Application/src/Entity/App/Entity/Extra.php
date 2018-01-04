<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Extra
 *
 * @ORM\Table(name="extra")
 * @ORM\Entity
 */
class Extra
{
    /**
     * @var string
     *
     * @ORM\Column(name="extra_key", type="string", length=12, nullable=false)
     */
    private $extraKey;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=true)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="smallint", nullable=true)
     */
    private $type;


}

