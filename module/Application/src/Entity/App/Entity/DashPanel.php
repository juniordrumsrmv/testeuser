<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DashPanel
 *
 * @ORM\Table(name="dash_panel")
 * @ORM\Entity
 */
class DashPanel
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
     * @ORM\Column(name="module", type="string", length=30, nullable=false)
     */
    private $module;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=128, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="config", type="string", length=250, nullable=true)
     */
    private $config;


}

