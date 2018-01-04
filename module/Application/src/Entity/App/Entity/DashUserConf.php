<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DashUserConf
 *
 * @ORM\Table(name="dash_user_conf")
 * @ORM\Entity
 */
class DashUserConf
{
    /**
     * @var string
     *
     * @ORM\Column(name="id_user", type="string", length=30, nullable=false)
     */
    private $idUser;

    /**
     * @var integer
     *
     * @ORM\Column(name="position", type="integer", nullable=false)
     */
    private $position;

    /**
     * @var string
     *
     * @ORM\Column(name="module", type="string", length=50, nullable=false)
     */
    private $module;

    /**
     * @var string
     *
     * @ORM\Column(name="panel", type="string", length=50, nullable=false)
     */
    private $panel;

    /**
     * @var string
     *
     * @ORM\Column(name="config", type="string", length=250, nullable=false)
     */
    private $config;


}

