<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BackupControl
 *
 * @ORM\Table(name="backup_control", indexes={@ORM\Index(name="index_backup_control", columns={"backup_type", "creation_time"})})
 * @ORM\Entity
 */
class BackupControl
{
    /**
     * @var integer
     *
     * @ORM\Column(name="backup_key", type="bigint", nullable=false)
     */
    private $backupKey;

    /**
     * @var boolean
     *
     * @ORM\Column(name="backup_type", type="boolean", nullable=true)
     */
    private $backupType;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creation_time", type="datetime", nullable=true)
     */
    private $creationTime;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=255, nullable=true)
     */
    private $comment;

    /**
     * @var boolean
     *
     * @ORM\Column(name="menu_item", type="boolean", nullable=true)
     */
    private $menuItem;

    /**
     * @var boolean
     *
     * @ORM\Column(name="entity", type="boolean", nullable=true)
     */
    private $entity;

    /**
     * @var boolean
     *
     * @ORM\Column(name="access_control", type="boolean", nullable=true)
     */
    private $accessControl;


}

