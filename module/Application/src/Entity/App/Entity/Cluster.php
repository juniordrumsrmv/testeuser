<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cluster
 *
 * @ORM\Table(name="cluster")
 * @ORM\Entity
 */
class Cluster
{
    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=false)
     */
    private $storeKey;

    /**
     * @var string
     *
     * @ORM\Column(name="server_name", type="text", length=65535, nullable=true)
     */
    private $serverName;

    /**
     * @var string
     *
     * @ORM\Column(name="server_path", type="text", length=65535, nullable=true)
     */
    private $serverPath;


}

