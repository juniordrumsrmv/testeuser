<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TransactionStatus
 *
 * @ORM\Table(name="transaction_status", indexes={@ORM\Index(name="index_transaction_status_start", columns={"trans_time_start"}), @ORM\Index(name="index_transaction_status_type", columns={"trans_type", "trans_time_start"}), @ORM\Index(name="index_transaction_status_user", columns={"trans_user", "trans_time_start"})})
 * @ORM\Entity
 */
class TransactionStatus
{
    /**
     * @var integer
     *
     * @ORM\Column(name="trans_key", type="bigint", nullable=false)
     */
    private $transKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="trans_status", type="smallint", nullable=false)
     */
    private $transStatus;

    /**
     * @var integer
     *
     * @ORM\Column(name="trans_type", type="smallint", nullable=false)
     */
    private $transType;

    /**
     * @var string
     *
     * @ORM\Column(name="trans_object", type="string", length=250, nullable=true)
     */
    private $transObject;

    /**
     * @var integer
     *
     * @ORM\Column(name="trans_store", type="bigint", nullable=false)
     */
    private $transStore;

    /**
     * @var integer
     *
     * @ORM\Column(name="trans_pos_from", type="smallint", nullable=false)
     */
    private $transPosFrom;

    /**
     * @var integer
     *
     * @ORM\Column(name="trans_pos_to", type="smallint", nullable=false)
     */
    private $transPosTo;

    /**
     * @var string
     *
     * @ORM\Column(name="trans_IP", type="string", length=36, nullable=true)
     */
    private $transIp;

    /**
     * @var string
     *
     * @ORM\Column(name="trans_user", type="string", length=10, nullable=true)
     */
    private $transUser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="trans_time_start", type="datetime", nullable=true)
     */
    private $transTimeStart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="trans_time_update", type="datetime", nullable=true)
     */
    private $transTimeUpdate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="trans_time_finish", type="datetime", nullable=true)
     */
    private $transTimeFinish;

    /**
     * @var integer
     *
     * @ORM\Column(name="trans_total_units", type="bigint", nullable=true)
     */
    private $transTotalUnits;

    /**
     * @var integer
     *
     * @ORM\Column(name="trans_current_units", type="bigint", nullable=true)
     */
    private $transCurrentUnits;

    /**
     * @var string
     *
     * @ORM\Column(name="trans_data", type="string", length=255, nullable=true)
     */
    private $transData;

    /**
     * @var string
     *
     * @ORM\Column(name="trans_report", type="string", length=255, nullable=true)
     */
    private $transReport;


}

