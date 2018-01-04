<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DashModule
 *
 * @ORM\Table(name="dash_module")
 * @ORM\Entity
 */
class DashModule
{
    /**
     * @var integer
     *
     * @ORM\Column(name="position", type="integer", nullable=false)
     */
    private $position;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=30, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=30, nullable=false)
     */
    private $label;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status = '0';


}

