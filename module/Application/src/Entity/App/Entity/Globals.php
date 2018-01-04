<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Globals
 *
 * @ORM\Table(name="globals")
 * @ORM\Entity
 */
class Globals
{
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
     * @ORM\Column(name="emporium_prefix", type="string", length=255, nullable=true)
     */
    private $emporiumPrefix;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_plu_import_time", type="datetime", nullable=true)
     */
    private $lastPluImportTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_plu_export_time", type="datetime", nullable=true)
     */
    private $lastPluExportTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_customer_import_time", type="datetime", nullable=true)
     */
    private $lastCustomerImportTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_customer_export_time", type="datetime", nullable=true)
     */
    private $lastCustomerExportTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="last_plu_update", type="bigint", nullable=true)
     */
    private $lastPluUpdate;

    /**
     * @var integer
     *
     * @ORM\Column(name="last_plu_export_update", type="bigint", nullable=true)
     */
    private $lastPluExportUpdate;

    /**
     * @var integer
     *
     * @ORM\Column(name="last_customer_update", type="bigint", nullable=true)
     */
    private $lastCustomerUpdate;

    /**
     * @var integer
     *
     * @ORM\Column(name="last_customer_export_update", type="bigint", nullable=true)
     */
    private $lastCustomerExportUpdate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_plu_update_time", type="datetime", nullable=true)
     */
    private $lastPluUpdateTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_customer_update_time", type="datetime", nullable=true)
     */
    private $lastCustomerUpdateTime;

    /**
     * @var string
     *
     * @ORM\Column(name="system_version", type="string", length=12, nullable=true)
     */
    private $systemVersion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="plu_by_store", type="boolean", nullable=true)
     */
    private $pluByStore;

    /**
     * @var integer
     *
     * @ORM\Column(name="max_send_sessions", type="smallint", nullable=true)
     */
    private $maxSendSessions;

    /**
     * @var integer
     *
     * @ORM\Column(name="block_transmit_delay", type="bigint", nullable=true)
     */
    private $blockTransmitDelay;

    /**
     * @var integer
     *
     * @ORM\Column(name="block_transmit_bytes", type="bigint", nullable=true)
     */
    private $blockTransmitBytes;

    /**
     * @var integer
     *
     * @ORM\Column(name="backoffice", type="smallint", nullable=true)
     */
    private $backoffice;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ignore_fiscal_date", type="boolean", nullable=true)
     */
    private $ignoreFiscalDate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="plu_autosend", type="boolean", nullable=true)
     */
    private $pluAutosend;

    /**
     * @var boolean
     *
     * @ORM\Column(name="customer_autosend", type="boolean", nullable=true)
     */
    private $customerAutosend;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_plu_autosend_check", type="datetime", nullable=true)
     */
    private $lastPluAutosendCheck;

    /**
     * @var boolean
     *
     * @ORM\Column(name="plu_autosend_changed", type="boolean", nullable=true)
     */
    private $pluAutosendChanged;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_customer_autosend_check", type="datetime", nullable=true)
     */
    private $lastCustomerAutosendCheck;

    /**
     * @var boolean
     *
     * @ORM\Column(name="customer_autosend_changed", type="boolean", nullable=true)
     */
    private $customerAutosendChanged;

    /**
     * @var integer
     *
     * @ORM\Column(name="last_verify_export_update", type="bigint", nullable=true)
     */
    private $lastVerifyExportUpdate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enable_transaction_mode", type="boolean", nullable=true)
     */
    private $enableTransactionMode;

    /**
     * @var boolean
     *
     * @ORM\Column(name="customer_by_store", type="boolean", nullable=true)
     */
    private $customerByStore;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_user_import_time", type="datetime", nullable=true)
     */
    private $lastUserImportTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_user_export_time", type="datetime", nullable=true)
     */
    private $lastUserExportTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="last_user_update", type="bigint", nullable=true)
     */
    private $lastUserUpdate;

    /**
     * @var integer
     *
     * @ORM\Column(name="last_user_export_update", type="bigint", nullable=true)
     */
    private $lastUserExportUpdate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_user_update_time", type="datetime", nullable=true)
     */
    private $lastUserUpdateTime;

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


}

