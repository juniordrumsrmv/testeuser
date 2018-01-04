<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Adder
 *
 * @ORM\Table(name="adder")
 * @ORM\Entity
 */
class Adder
{
    /**
     * @var integer
     *
     * @ORM\Column(name="adder_key", type="integer", nullable=false)
     */
    private $adderKey;

    /**
     * @var string
     *
     * @ORM\Column(name="adder_name", type="string", length=50, nullable=true)
     */
    private $adderName;


}

