<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pos
 *
 * @ORM\Table(name="pos")
 * @ORM\Entity
 */
class Pos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=false)
     */
    private $storeKey = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="pos_number", type="smallint", nullable=false)
     */
    private $posNumber = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="pos_decimals", type="boolean", nullable=false)
     */
    private $posDecimals = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="pos_name", type="string", length=30, nullable=false)
     */
    private $posName = '';

    /**
     * @var string
     *
     * @ORM\Column(name="pos_serial", type="string", length=20, nullable=false)
     */
    private $posSerial = '';

    /**
     * @var string
     *
     * @ORM\Column(name="pos_version", type="string", length=20, nullable=false)
     */
    private $posVersion = '';

    /**
     * @var string
     *
     * @ORM\Column(name="pos_impress", type="string", length=20, nullable=false)
     */
    private $posImpress = '';

    /**
     * @var string
     *
     * @ORM\Column(name="pos_checkout", type="string", length=20, nullable=false)
     */
    private $posCheckout = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pos_date_inc", type="date", nullable=false)
     */
    private $posDateInc = '0000-00-00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pos_date_alt", type="date", nullable=false)
     */
    private $posDateAlt = '0000-00-00';

    /**
     * @var integer
     *
     * @ORM\Column(name="pos_status", type="smallint", nullable=false)
     */
    private $posStatus = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pos_contact", type="datetime", nullable=false)
     */
    private $posContact = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="pos_model", type="string", length=20, nullable=false)
     */
    private $posModel = '';

    /**
     * @var string
     *
     * @ORM\Column(name="pos_IP", type="string", length=20, nullable=true)
     */
    private $posIp;

    /**
     * @var boolean
     *
     * @ORM\Column(name="pos_system", type="boolean", nullable=true)
     */
    private $posSystem;

    /**
     * @var string
     *
     * @ORM\Column(name="pos_invoice_printer", type="string", length=20, nullable=true)
     */
    private $posInvoicePrinter;

    /**
     * @var integer
     *
     * @ORM\Column(name="pos_last_plu_update", type="bigint", nullable=true)
     */
    private $posLastPluUpdate;

    /**
     * @var integer
     *
     * @ORM\Column(name="pos_last_customer_update", type="bigint", nullable=true)
     */
    private $posLastCustomerUpdate;

    /**
     * @var string
     *
     * @ORM\Column(name="pos_data", type="blob", length=65535, nullable=true)
     */
    private $posData;

    /**
     * @var boolean
     *
     * @ORM\Column(name="pos_transmit_type", type="boolean", nullable=true)
     */
    private $posTransmitType;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pos_last_plu_export_time", type="datetime", nullable=true)
     */
    private $posLastPluExportTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pos_last_plu_update_time", type="datetime", nullable=true)
     */
    private $posLastPluUpdateTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pos_last_customer_export_time", type="datetime", nullable=true)
     */
    private $posLastCustomerExportTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pos_last_customer_update_time", type="datetime", nullable=true)
     */
    private $posLastCustomerUpdateTime;

    /**
     * @var string
     *
     * @ORM\Column(name="pos_internal_ip", type="string", length=20, nullable=true)
     */
    private $posInternalIp;

    /**
     * @var integer
     *
     * @ORM\Column(name="pos_internal_port", type="smallint", nullable=true)
     */
    private $posInternalPort;

    /**
     * @var boolean
     *
     * @ORM\Column(name="pos_automatic_option", type="boolean", nullable=true)
     */
    private $posAutomaticOption;

    /**
     * @var boolean
     *
     * @ORM\Column(name="pos_rec_status", type="boolean", nullable=true)
     */
    private $posRecStatus;

    /**
     * @var integer
     *
     * @ORM\Column(name="pos_type_key", type="smallint", nullable=true)
     */
    private $posTypeKey;

    /**
     * @var boolean
     *
     * @ORM\Column(name="pos_emergency_status", type="boolean", nullable=true)
     */
    private $posEmergencyStatus;

    /**
     * @var integer
     *
     * @ORM\Column(name="pos_plu_type", type="smallint", nullable=true)
     */
    private $posPluType;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="info_time", type="datetime", nullable=true)
     */
    private $infoTime;

    /**
     * @var string
     *
     * @ORM\Column(name="os_name", type="string", length=255, nullable=true)
     */
    private $osName;

    /**
     * @var string
     *
     * @ORM\Column(name="os_version", type="string", length=255, nullable=true)
     */
    private $osVersion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="os_code", type="boolean", nullable=true)
     */
    private $osCode;

    /**
     * @var boolean
     *
     * @ORM\Column(name="cpu_count", type="boolean", nullable=true)
     */
    private $cpuCount;

    /**
     * @var integer
     *
     * @ORM\Column(name="memory_total", type="bigint", nullable=true)
     */
    private $memoryTotal;

    /**
     * @var integer
     *
     * @ORM\Column(name="swap_total", type="bigint", nullable=true)
     */
    private $swapTotal;

    /**
     * @var integer
     *
     * @ORM\Column(name="swap_free", type="bigint", nullable=true)
     */
    private $swapFree;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_user_update_time", type="datetime", nullable=true)
     */
    private $lastUserUpdateTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="last_user_update", type="bigint", nullable=true)
     */
    private $lastUserUpdate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="user_autosend", type="boolean", nullable=true)
     */
    private $userAutosend;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_user_autosend_check", type="datetime", nullable=true)
     */
    private $lastUserAutosendCheck;

    /**
     * @var boolean
     *
     * @ORM\Column(name="user_autosend_changed", type="boolean", nullable=true)
     */
    private $userAutosendChanged;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_user_autosend_time", type="datetime", nullable=true)
     */
    private $lastUserAutosendTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pos_nfce_time", type="datetime", nullable=true)
     */
    private $posNfceTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cert_expr_date", type="datetime", nullable=true)
     */
    private $certExprDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pos_sat_time", type="datetime", nullable=true)
     */
    private $posSatTime;


}

