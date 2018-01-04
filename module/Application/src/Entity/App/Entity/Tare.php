<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tare
 *
 * @ORM\Table(name="tare", uniqueConstraints={@ORM\UniqueConstraint(name="index_tare_id", columns={"tare_id"})})
 * @ORM\Entity
 */
class Tare
{
    /**
     * @var integer
     *
     * @ORM\Column(name="tare_key", type="integer", nullable=false)
     */
    private $tareKey;

    /**
     * @var string
     *
     * @ORM\Column(name="tare_id", type="string", length=8, nullable=false)
     */
    private $tareId = '';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=true)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="decimals", type="smallint", nullable=true)
     */
    private $decimals;

    /**
     * @var string
     *
     * @ORM\Column(name="tare_value", type="decimal", precision=8, scale=3, nullable=true)
     */
    private $tareValue;


}

