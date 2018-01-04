<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Store
 *
 * @ORM\Table(name="store")
 * @ORM\Entity
 */
class Store
{
    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=false)
     */
    private $storeKey = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="store_id1", type="string", length=25, nullable=false)
     */
    private $storeId1 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="store_id2", type="string", length=20, nullable=false)
     */
    private $storeId2 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="store_id3", type="string", length=15, nullable=false)
     */
    private $storeId3 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="store_name", type="string", length=30, nullable=false)
     */
    private $storeName = '';

    /**
     * @var string
     *
     * @ORM\Column(name="store_address", type="string", length=50, nullable=false)
     */
    private $storeAddress = '';

    /**
     * @var string
     *
     * @ORM\Column(name="store_neig", type="string", length=20, nullable=false)
     */
    private $storeNeig = '';

    /**
     * @var string
     *
     * @ORM\Column(name="store_city", type="string", length=255, nullable=false)
     */
    private $storeCity;

    /**
     * @var string
     *
     * @ORM\Column(name="store_state", type="string", length=20, nullable=false)
     */
    private $storeState = '';

    /**
     * @var string
     *
     * @ORM\Column(name="store_zip", type="string", length=12, nullable=false)
     */
    private $storeZip = '';

    /**
     * @var string
     *
     * @ORM\Column(name="store_email", type="string", length=50, nullable=false)
     */
    private $storeEmail = '';

    /**
     * @var string
     *
     * @ORM\Column(name="store_phone1", type="string", length=15, nullable=false)
     */
    private $storePhone1 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="store_phone2", type="string", length=15, nullable=false)
     */
    private $storePhone2 = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="store_date_inc", type="date", nullable=false)
     */
    private $storeDateInc = '0000-00-00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="store_date_alt", type="date", nullable=false)
     */
    private $storeDateAlt = '0000-00-00';

    /**
     * @var integer
     *
     * @ORM\Column(name="store_nf_number", type="bigint", nullable=true)
     */
    private $storeNfNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="store_nf_serial", type="string", length=3, nullable=true)
     */
    private $storeNfSerial;

    /**
     * @var integer
     *
     * @ORM\Column(name="store_map_number", type="integer", nullable=true)
     */
    private $storeMapNumber;

    /**
     * @var boolean
     *
     * @ORM\Column(name="store_map_type", type="boolean", nullable=true)
     */
    private $storeMapType;

    /**
     * @var integer
     *
     * @ORM\Column(name="store_time_zone", type="smallint", nullable=true)
     */
    private $storeTimeZone;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="store_last_customer_export_time", type="datetime", nullable=true)
     */
    private $storeLastCustomerExportTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="store_last_customer_update_time", type="datetime", nullable=true)
     */
    private $storeLastCustomerUpdateTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="store_last_customer_update", type="bigint", nullable=true)
     */
    private $storeLastCustomerUpdate;

    /**
     * @var integer
     *
     * @ORM\Column(name="store_last_customer_export_update", type="bigint", nullable=true)
     */
    private $storeLastCustomerExportUpdate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="store_last_plu_export_time", type="datetime", nullable=true)
     */
    private $storeLastPluExportTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="store_last_plu_update_time", type="datetime", nullable=true)
     */
    private $storeLastPluUpdateTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="store_last_plu_update", type="bigint", nullable=true)
     */
    private $storeLastPluUpdate;

    /**
     * @var integer
     *
     * @ORM\Column(name="store_last_plu_export_update", type="bigint", nullable=true)
     */
    private $storeLastPluExportUpdate;

    /**
     * @var string
     *
     * @ORM\Column(name="store_razao", type="string", length=50, nullable=false)
     */
    private $storeRazao = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="store_num", type="smallint", nullable=false)
     */
    private $storeNum = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="store_comple", type="string", length=20, nullable=false)
     */
    private $storeComple = '';

    /**
     * @var string
     *
     * @ORM\Column(name="store_contact", type="string", length=20, nullable=false)
     */
    private $storeContact = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="store_last_plu_autosend_check", type="datetime", nullable=true)
     */
    private $storeLastPluAutosendCheck;

    /**
     * @var boolean
     *
     * @ORM\Column(name="store_plu_autosend_changed", type="boolean", nullable=true)
     */
    private $storePluAutosendChanged;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="store_last_customer_autosend_check", type="datetime", nullable=true)
     */
    private $storeLastCustomerAutosendCheck;

    /**
     * @var boolean
     *
     * @ORM\Column(name="store_customer_autosend_changed", type="boolean", nullable=true)
     */
    private $storeCustomerAutosendChanged;

    /**
     * @var integer
     *
     * @ORM\Column(name="store_invoice_seq", type="integer", nullable=true)
     */
    private $storeInvoiceSeq;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="store_last_verifier_export_time", type="datetime", nullable=true)
     */
    private $storeLastVerifierExportTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="store_last_verifier_update_time", type="datetime", nullable=true)
     */
    private $storeLastVerifierUpdateTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="store_last_verifier_update", type="bigint", nullable=true)
     */
    private $storeLastVerifierUpdate;

    /**
     * @var integer
     *
     * @ORM\Column(name="store_last_verifier_export_update", type="bigint", nullable=true)
     */
    private $storeLastVerifierExportUpdate;

    /**
     * @var integer
     *
     * @ORM\Column(name="store_tax_type_key", type="integer", nullable=true)
     */
    private $storeTaxTypeKey;

    /**
     * @var string
     *
     * @ORM\Column(name="store_country_code", type="string", length=10, nullable=true)
     */
    private $storeCountryCode;

    /**
     * @var string
     *
     * @ORM\Column(name="store_state_code", type="string", length=10, nullable=true)
     */
    private $storeStateCode;

    /**
     * @var string
     *
     * @ORM\Column(name="store_city_code", type="string", length=16, nullable=true)
     */
    private $storeCityCode;

    /**
     * @var integer
     *
     * @ORM\Column(name="accountant_key", type="bigint", nullable=false)
     */
    private $accountantKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="tributary_system", type="smallint", nullable=true)
     */
    private $tributarySystem = '0';

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
     * @var integer
     *
     * @ORM\Column(name="store_fiscal_country_code", type="integer", nullable=true)
     */
    private $storeFiscalCountryCode;


}

