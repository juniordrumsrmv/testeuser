<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TransactionLog
 *
 * @ORM\Table(name="transaction_log", indexes={@ORM\Index(name="index_log", columns={"start_time", "user_id", "entity", "access_type_key"}), @ORM\Index(name="index_login", columns={"user_id", "entity"})})
 * @ORM\Entity
 */
class TransactionLog
{
    /**
     * @var integer
     *
     * @ORM\Column(name="log_key", type="bigint", nullable=false)
     */
    private $logKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="access_type_key", type="integer", nullable=false)
     */
    private $accessTypeKey;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_time", type="datetime", nullable=false)
     */
    private $startTime;

    /**
     * @var string
     *
     * @ORM\Column(name="user_id", type="string", length=10, nullable=false)
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="terminal_ip", type="string", length=36, nullable=false)
     */
    private $terminalIp;

    /**
     * @var integer
     *
     * @ORM\Column(name="entity_type_key", type="integer", nullable=false)
     */
    private $entityTypeKey;

    /**
     * @var string
     *
     * @ORM\Column(name="entity", type="string", length=40, nullable=false)
     */
    private $entity;

    /**
     * @var string
     *
     * @ORM\Column(name="program_file", type="string", length=64, nullable=false)
     */
    private $programFile;

    /**
     * @var string
     *
     * @ORM\Column(name="key_value", type="string", length=255, nullable=true)
     */
    private $keyValue;

    /**
     * @var string
     *
     * @ORM\Column(name="new_data", type="text", length=65535, nullable=true)
     */
    private $newData;


}

