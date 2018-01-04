<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ecf
 *
 * @ORM\Table(name="ecf")
 * @ORM\Entity
 */
class Ecf
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
     * @ORM\Column(name="ecf_number", type="smallint", nullable=false)
     */
    private $ecfNumber = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ecf_name", type="string", length=30, nullable=false)
     */
    private $ecfName = '';

    /**
     * @var string
     *
     * @ORM\Column(name="ecf_serial", type="string", length=20, nullable=false)
     */
    private $ecfSerial = '';

    /**
     * @var string
     *
     * @ORM\Column(name="ecf_version", type="string", length=20, nullable=false)
     */
    private $ecfVersion = '';

    /**
     * @var string
     *
     * @ORM\Column(name="ecf_model", type="string", length=40, nullable=true)
     */
    private $ecfModel;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ecf_date_inc", type="date", nullable=false)
     */
    private $ecfDateInc = '0000-00-00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ecf_date_alt", type="date", nullable=false)
     */
    private $ecfDateAlt = '0000-00-00';

    /**
     * @var boolean
     *
     * @ORM\Column(name="ecf_status", type="boolean", nullable=true)
     */
    private $ecfStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="ecf_manufacturer", type="string", length=40, nullable=true)
     */
    private $ecfManufacturer;

    /**
     * @var string
     *
     * @ORM\Column(name="ecf_mfd", type="string", length=20, nullable=true)
     */
    private $ecfMfd;

    /**
     * @var string
     *
     * @ORM\Column(name="ecf_aditional_mfd", type="string", length=1, nullable=true)
     */
    private $ecfAditionalMfd;

    /**
     * @var string
     *
     * @ORM\Column(name="ecf_type", type="string", length=10, nullable=true)
     */
    private $ecfType;

    /**
     * @var integer
     *
     * @ORM\Column(name="ecf_ticket_system", type="integer", nullable=true)
     */
    private $ecfTicketSystem;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ecf_system", type="boolean", nullable=true)
     */
    private $ecfSystem;

    /**
     * @var string
     *
     * @ORM\Column(name="ecf_firmware_version", type="string", length=20, nullable=true)
     */
    private $ecfFirmwareVersion;

    /**
     * @var string
     *
     * @ORM\Column(name="ecf_firmware_date", type="string", length=8, nullable=true)
     */
    private $ecfFirmwareDate;

    /**
     * @var string
     *
     * @ORM\Column(name="ecf_firmware_time", type="string", length=6, nullable=true)
     */
    private $ecfFirmwareTime;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ecf_owner_number", type="boolean", nullable=true)
     */
    private $ecfOwnerNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="ecf_owner_id", type="string", length=20, nullable=true)
     */
    private $ecfOwnerId;

    /**
     * @var string
     *
     * @ORM\Column(name="ecf_owner_alt_id", type="string", length=20, nullable=true)
     */
    private $ecfOwnerAltId;

    /**
     * @var string
     *
     * @ORM\Column(name="ecf_owner_name", type="string", length=60, nullable=true)
     */
    private $ecfOwnerName;

    /**
     * @var string
     *
     * @ORM\Column(name="ecf_owner_address", type="string", length=60, nullable=true)
     */
    private $ecfOwnerAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="ecf_owner_insertion_date", type="string", length=8, nullable=true)
     */
    private $ecfOwnerInsertionDate;

    /**
     * @var string
     *
     * @ORM\Column(name="ecf_owner_insertion_time", type="string", length=6, nullable=true)
     */
    private $ecfOwnerInsertionTime;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ecf_emergency_status", type="boolean", nullable=true)
     */
    private $ecfEmergencyStatus;


}

