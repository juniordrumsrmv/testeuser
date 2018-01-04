<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ServertoserverComparison
 *
 * @ORM\Table(name="servertoserver_comparison")
 * @ORM\Entity
 */
class ServertoserverComparison
{
    /**
     * @var integer
     *
     * @ORM\Column(name="from_store_key", type="bigint", nullable=false)
     */
    private $fromStoreKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="to_store_key", type="bigint", nullable=false)
     */
    private $toStoreKey;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="store_ip", type="string", length=20, nullable=true)
     */
    private $storeIp;

    /**
     * @var string
     *
     * @ORM\Column(name="directory", type="string", length=255, nullable=true)
     */
    private $directory;

    /**
     * @var string
     *
     * @ORM\Column(name="ctrl_file", type="string", length=255, nullable=true)
     */
    private $ctrlFile;

    /**
     * @var integer
     *
     * @ORM\Column(name="update_wait_time", type="smallint", nullable=true)
     */
    private $updateWaitTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_change_time", type="datetime", nullable=true)
     */
    private $lastChangeTime;


}

