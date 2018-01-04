<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WsnfpStatus
 *
 * @ORM\Table(name="wsnfp_status")
 * @ORM\Entity
 */
class WsnfpStatus
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
     * @ORM\Column(name="ecf_number", type="smallint", nullable=false)
     */
    private $ecfNumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fiscal_date", type="date", nullable=false)
     */
    private $fiscalDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="status_mov", type="smallint", nullable=true)
     */
    private $statusMov;

    /**
     * @var integer
     *
     * @ORM\Column(name="status_trn", type="smallint", nullable=true)
     */
    private $statusTrn;

    /**
     * @var string
     *
     * @ORM\Column(name="observation", type="string", length=255, nullable=true)
     */
    private $observation;

    /**
     * @var integer
     *
     * @ORM\Column(name="user", type="integer", nullable=true)
     */
    private $user;

    /**
     * @var integer
     *
     * @ORM\Column(name="last_wsnfp_key", type="bigint", nullable=true)
     */
    private $lastWsnfpKey;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_export_time", type="datetime", nullable=true)
     */
    private $lastExportTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_xml_process_time", type="datetime", nullable=true)
     */
    private $lastXmlProcessTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_check_time", type="datetime", nullable=true)
     */
    private $lastCheckTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="last_trans_key", type="bigint", nullable=true)
     */
    private $lastTransKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="pos_number", type="smallint", nullable=true)
     */
    private $posNumber;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ecf_status", type="boolean", nullable=true)
     */
    private $ecfStatus;


}

