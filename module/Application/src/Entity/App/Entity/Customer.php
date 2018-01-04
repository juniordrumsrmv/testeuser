<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Customer
 *
 * @ORM\Table(name="customer", indexes={@ORM\Index(name="index_name", columns={"customer_name"}), @ORM\Index(name="index_store", columns={"store_key"}), @ORM\Index(name="index_customer_last", columns={"customer_last_change_time", "store_key"})})
 * @ORM\Entity
 */
class Customer
{
    /**
     * @var integer
     *
     * @ORM\Column(name="customer_key", type="bigint", nullable=false)
     */
    private $customerKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="customer_id_type", type="smallint", nullable=true)
     */
    private $customerIdType;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_id", type="string", length=25, nullable=true)
     */
    private $customerId;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_id_alt", type="string", length=25, nullable=true)
     */
    private $customerIdAlt;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_name", type="string", length=60, nullable=true)
     */
    private $customerName;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_name2", type="string", length=60, nullable=true)
     */
    private $customerName2;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_address", type="string", length=60, nullable=true)
     */
    private $customerAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_comple", type="string", length=20, nullable=true)
     */
    private $customerComple;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_neig", type="string", length=20, nullable=true)
     */
    private $customerNeig;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_city", type="string", length=20, nullable=true)
     */
    private $customerCity;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_state", type="string", length=20, nullable=true)
     */
    private $customerState;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_zip", type="string", length=12, nullable=true)
     */
    private $customerZip;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_email", type="string", length=50, nullable=true)
     */
    private $customerEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_phone1", type="string", length=15, nullable=true)
     */
    private $customerPhone1;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_phone1_rec", type="string", length=15, nullable=true)
     */
    private $customerPhone1Rec;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_phone2", type="string", length=15, nullable=true)
     */
    private $customerPhone2;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="customer_date_inc", type="date", nullable=false)
     */
    private $customerDateInc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="customer_date_alt", type="date", nullable=false)
     */
    private $customerDateAlt;

    /**
     * @var integer
     *
     * @ORM\Column(name="customer_type", type="smallint", nullable=true)
     */
    private $customerType;

    /**
     * @var integer
     *
     * @ORM\Column(name="customer_code", type="bigint", nullable=true)
     */
    private $customerCode;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="customer_last_change_time", type="datetime", nullable=true)
     */
    private $customerLastChangeTime;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_ie", type="string", length=15, nullable=true)
     */
    private $customerIe;

    /**
     * @var boolean
     *
     * @ORM\Column(name="customer_adr_type", type="boolean", nullable=true)
     */
    private $customerAdrType;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_adr_time", type="string", length=15, nullable=true)
     */
    private $customerAdrTime;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_country_code", type="string", length=10, nullable=true)
     */
    private $customerCountryCode;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_state_code", type="string", length=10, nullable=true)
     */
    private $customerStateCode;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_city_code", type="string", length=16, nullable=true)
     */
    private $customerCityCode;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_job_id", type="string", length=25, nullable=true)
     */
    private $customerJobId;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_job_name", type="string", length=60, nullable=true)
     */
    private $customerJobName;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_job_address", type="string", length=60, nullable=true)
     */
    private $customerJobAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_job_comple", type="string", length=20, nullable=true)
     */
    private $customerJobComple;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_job_neig", type="string", length=20, nullable=true)
     */
    private $customerJobNeig;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_job_city", type="string", length=20, nullable=true)
     */
    private $customerJobCity;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_job_state", type="string", length=20, nullable=true)
     */
    private $customerJobState;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_job_zip", type="string", length=12, nullable=true)
     */
    private $customerJobZip;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_job_phone", type="string", length=15, nullable=true)
     */
    private $customerJobPhone;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_job_title", type="string", length=30, nullable=true)
     */
    private $customerJobTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_job_revenue", type="string", length=15, nullable=true)
     */
    private $customerJobRevenue;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="customer_job_date", type="date", nullable=true)
     */
    private $customerJobDate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="customer_job_type", type="boolean", nullable=true)
     */
    private $customerJobType;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_job_old_name", type="string", length=60, nullable=true)
     */
    private $customerJobOldName;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_job_old_phone", type="string", length=15, nullable=true)
     */
    private $customerJobOldPhone;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="customer_job_old_in", type="date", nullable=true)
     */
    private $customerJobOldIn;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="customer_job_old_out", type="date", nullable=true)
     */
    private $customerJobOldOut;

    /**
     * @var integer
     *
     * @ORM\Column(name="customer_ref_bank1", type="smallint", nullable=true)
     */
    private $customerRefBank1;

    /**
     * @var integer
     *
     * @ORM\Column(name="customer_ref_branch1", type="smallint", nullable=true)
     */
    private $customerRefBranch1;

    /**
     * @var integer
     *
     * @ORM\Column(name="customer_ref_account1", type="integer", nullable=true)
     */
    private $customerRefAccount1;

    /**
     * @var integer
     *
     * @ORM\Column(name="customer_ref_bank2", type="smallint", nullable=true)
     */
    private $customerRefBank2;

    /**
     * @var integer
     *
     * @ORM\Column(name="customer_ref_branch2", type="smallint", nullable=true)
     */
    private $customerRefBranch2;

    /**
     * @var integer
     *
     * @ORM\Column(name="customer_ref_account2", type="integer", nullable=true)
     */
    private $customerRefAccount2;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_ref_name1", type="string", length=60, nullable=true)
     */
    private $customerRefName1;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_ref_phone1", type="string", length=15, nullable=true)
     */
    private $customerRefPhone1;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_ref_comple1", type="string", length=80, nullable=true)
     */
    private $customerRefComple1;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_ref_name2", type="string", length=60, nullable=true)
     */
    private $customerRefName2;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_ref_phone2", type="string", length=15, nullable=true)
     */
    private $customerRefPhone2;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_ref_comple2", type="string", length=80, nullable=true)
     */
    private $customerRefComple2;

    /**
     * @var boolean
     *
     * @ORM\Column(name="customer_ref_card1", type="boolean", nullable=true)
     */
    private $customerRefCard1;

    /**
     * @var boolean
     *
     * @ORM\Column(name="customer_ref_card2", type="boolean", nullable=true)
     */
    private $customerRefCard2;

    /**
     * @var boolean
     *
     * @ORM\Column(name="customer_ref_card3", type="boolean", nullable=true)
     */
    private $customerRefCard3;

    /**
     * @var boolean
     *
     * @ORM\Column(name="customer_ref_card4", type="boolean", nullable=true)
     */
    private $customerRefCard4;

    /**
     * @var boolean
     *
     * @ORM\Column(name="customer_ref_card5", type="boolean", nullable=true)
     */
    private $customerRefCard5;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="customer_birthday", type="date", nullable=true)
     */
    private $customerBirthday;

    /**
     * @var boolean
     *
     * @ORM\Column(name="customer_gender", type="boolean", nullable=true)
     */
    private $customerGender;

    /**
     * @var boolean
     *
     * @ORM\Column(name="customer_nacionality", type="boolean", nullable=true)
     */
    private $customerNacionality;

    /**
     * @var boolean
     *
     * @ORM\Column(name="customer_education_level", type="boolean", nullable=true)
     */
    private $customerEducationLevel;

    /**
     * @var boolean
     *
     * @ORM\Column(name="customer_civil_status", type="boolean", nullable=true)
     */
    private $customerCivilStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_mothers_name", type="string", length=40, nullable=true)
     */
    private $customerMothersName;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_fathers_name", type="string", length=40, nullable=true)
     */
    private $customerFathersName;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_spouse_id", type="string", length=25, nullable=true)
     */
    private $customerSpouseId;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_spouse_name", type="string", length=60, nullable=true)
     */
    private $customerSpouseName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="customer_spouse_birthday", type="date", nullable=true)
     */
    private $customerSpouseBirthday;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_spouse_job_name", type="string", length=60, nullable=true)
     */
    private $customerSpouseJobName;

    /**
     * @var boolean
     *
     * @ORM\Column(name="customer_spouse_job_time", type="boolean", nullable=true)
     */
    private $customerSpouseJobTime;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_spouse_job_phone", type="string", length=15, nullable=true)
     */
    private $customerSpouseJobPhone;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_spouse_job_title", type="string", length=15, nullable=true)
     */
    private $customerSpouseJobTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_spouse_job_revenue", type="string", length=15, nullable=true)
     */
    private $customerSpouseJobRevenue;

    /**
     * @var integer
     *
     * @ORM\Column(name="customer_dependents", type="smallint", nullable=true)
     */
    private $customerDependents;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_dep_name1", type="string", length=60, nullable=true)
     */
    private $customerDepName1;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="customer_dep_birthday1", type="date", nullable=true)
     */
    private $customerDepBirthday1;

    /**
     * @var boolean
     *
     * @ORM\Column(name="customer_dep_gender1", type="boolean", nullable=true)
     */
    private $customerDepGender1;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_dep_name2", type="string", length=60, nullable=true)
     */
    private $customerDepName2;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="customer_dep_birthday2", type="date", nullable=true)
     */
    private $customerDepBirthday2;

    /**
     * @var boolean
     *
     * @ORM\Column(name="customer_dep_gender2", type="boolean", nullable=true)
     */
    private $customerDepGender2;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_dep_name3", type="string", length=60, nullable=true)
     */
    private $customerDepName3;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="customer_dep_birthday3", type="date", nullable=true)
     */
    private $customerDepBirthday3;

    /**
     * @var boolean
     *
     * @ORM\Column(name="customer_dep_gender3", type="boolean", nullable=true)
     */
    private $customerDepGender3;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_vehicles", type="string", length=80, nullable=true)
     */
    private $customerVehicles;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_properties", type="string", length=80, nullable=true)
     */
    private $customerProperties;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_password", type="string", length=80, nullable=true)
     */
    private $customerPassword;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_password_md5", type="string", length=80, nullable=true)
     */
    private $customerPasswordMd5;

    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=true)
     */
    private $storeKey;

    /**
     * @var string
     *
     * @ORM\Column(name="biometrics", type="blob", length=65535, nullable=true)
     */
    private $biometrics;


}

