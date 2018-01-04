<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cest
 *
 * @ORM\Table(name="cest")
 * @ORM\Entity
 */
class Cest
{
    /**
     * @var string
     *
     * @ORM\Column(name="cest_code", type="string", length=12, nullable=false)
     */
    private $cestCode;

    /**
     * @var string
     *
     * @ORM\Column(name="cest_description", type="string", length=250, nullable=false)
     */
    private $cestDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="segment", type="string", length=50, nullable=true)
     */
    private $segment;

    /**
     * @var string
     *
     * @ORM\Column(name="item", type="string", length=10, nullable=true)
     */
    private $item;


}

