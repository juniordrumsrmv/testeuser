<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FarmServer
 *
 * @ORM\Table(name="farm_server")
 * @ORM\Entity
 */
class FarmServer
{
    /**
     * @var integer
     *
     * @ORM\Column(name="farm_server_key", type="smallint", nullable=false)
     */
    private $farmServerKey;

    /**
     * @var string
     *
     * @ORM\Column(name="farm_server_name", type="string", length=255, nullable=true)
     */
    private $farmServerName;

    /**
     * @var string
     *
     * @ORM\Column(name="farm_server_ip", type="string", length=32, nullable=true)
     */
    private $farmServerIp;

    /**
     * @var boolean
     *
     * @ORM\Column(name="farm_server_priority", type="boolean", nullable=true)
     */
    private $farmServerPriority;

    /**
     * @var boolean
     *
     * @ORM\Column(name="farm_server_status", type="boolean", nullable=true)
     */
    private $farmServerStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="farm_server_directory", type="string", length=255, nullable=true)
     */
    private $farmServerDirectory;

    /**
     * @var string
     *
     * @ORM\Column(name="farm_server_substitute", type="string", length=255, nullable=true)
     */
    private $farmServerSubstitute;


}

