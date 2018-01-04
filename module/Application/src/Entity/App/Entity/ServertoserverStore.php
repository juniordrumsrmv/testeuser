<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ServertoserverStore
 *
 * @ORM\Table(name="servertoserver_store")
 * @ORM\Entity
 */
class ServertoserverStore
{
    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=false)
     */
    private $storeKey;

    /**
     * @var boolean
     *
     * @ORM\Column(name="main_server_type_flag", type="boolean", nullable=true)
     */
    private $mainServerTypeFlag;

    /**
     * @var boolean
     *
     * @ORM\Column(name="sec_server_type_flag", type="boolean", nullable=true)
     */
    private $secServerTypeFlag;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_change_time", type="datetime", nullable=true)
     */
    private $lastChangeTime;


}

