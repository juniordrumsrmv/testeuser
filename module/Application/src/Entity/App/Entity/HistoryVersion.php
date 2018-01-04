<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HistoryVersion
 *
 * @ORM\Table(name="history_version", uniqueConstraints={@ORM\UniqueConstraint(name="index_version_upd", columns={"database_version", "version_key"})})
 * @ORM\Entity
 */
class HistoryVersion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="version_key", type="bigint", nullable=false)
     */
    private $versionKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="database_version", type="smallint", nullable=true)
     */
    private $databaseVersion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="database_update_time", type="datetime", nullable=true)
     */
    private $databaseUpdateTime;

    /**
     * @var string
     *
     * @ORM\Column(name="system_version", type="string", length=12, nullable=true)
     */
    private $systemVersion;

    /**
     * @var string
     *
     * @ORM\Column(name="program_upd", type="string", length=40, nullable=true)
     */
    private $programUpd;

    /**
     * @var string
     *
     * @ORM\Column(name="description_upd", type="string", length=255, nullable=true)
     */
    private $descriptionUpd;


}

