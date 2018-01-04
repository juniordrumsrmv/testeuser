<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PosBackup
 *
 * @ORM\Table(name="pos_backup")
 * @ORM\Entity
 */
class PosBackup
{
    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=false)
     */
    private $storeKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="pos_number", type="smallint", nullable=false)
     */
    private $posNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="backup_name", type="string", length=255, nullable=false)
     */
    private $backupName;

    /**
     * @var string
     *
     * @ORM\Column(name="backup_time", type="string", length=16, nullable=true)
     */
    private $backupTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="backup_bytes", type="bigint", nullable=true)
     */
    private $backupBytes;


}

