<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sat
 *
 * @ORM\Table(name="sat")
 * @ORM\Entity
 */
class Sat
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
     * @ORM\Column(name="sat_number", type="smallint", nullable=false)
     */
    private $satNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="sat_name", type="string", length=30, nullable=false)
     */
    private $satName;

    /**
     * @var string
     *
     * @ORM\Column(name="sat_serial", type="string", length=30, nullable=false)
     */
    private $satSerial;

    /**
     * @var string
     *
     * @ORM\Column(name="sat_version", type="string", length=20, nullable=false)
     */
    private $satVersion;

    /**
     * @var string
     *
     * @ORM\Column(name="sat_model", type="string", length=40, nullable=false)
     */
    private $satModel;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sat_date_inc", type="date", nullable=false)
     */
    private $satDateInc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sat_date_alt", type="date", nullable=false)
     */
    private $satDateAlt;

    /**
     * @var boolean
     *
     * @ORM\Column(name="sat_status", type="boolean", nullable=true)
     */
    private $satStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="sat_manufacturer", type="string", length=40, nullable=true)
     */
    private $satManufacturer;

    /**
     * @var string
     *
     * @ORM\Column(name="sat_lan_type", type="string", length=20, nullable=true)
     */
    private $satLanType;

    /**
     * @var string
     *
     * @ORM\Column(name="sat_lan_IP", type="string", length=20, nullable=true)
     */
    private $satLanIp;

    /**
     * @var string
     *
     * @ORM\Column(name="sat_lan_mask", type="string", length=20, nullable=true)
     */
    private $satLanMask;

    /**
     * @var string
     *
     * @ORM\Column(name="sat_lan_gw", type="string", length=20, nullable=true)
     */
    private $satLanGw;

    /**
     * @var string
     *
     * @ORM\Column(name="sat_lan_dns", type="string", length=20, nullable=true)
     */
    private $satLanDns;

    /**
     * @var string
     *
     * @ORM\Column(name="sat_lan_dns_alt", type="string", length=20, nullable=true)
     */
    private $satLanDnsAlt;

    /**
     * @var string
     *
     * @ORM\Column(name="sat_mac_addr", type="string", length=30, nullable=true)
     */
    private $satMacAddr;

    /**
     * @var boolean
     *
     * @ORM\Column(name="sat_lan_online", type="boolean", nullable=true)
     */
    private $satLanOnline;

    /**
     * @var boolean
     *
     * @ORM\Column(name="sat_battery", type="boolean", nullable=true)
     */
    private $satBattery;

    /**
     * @var string
     *
     * @ORM\Column(name="sat_disk_space", type="string", length=30, nullable=true)
     */
    private $satDiskSpace;

    /**
     * @var string
     *
     * @ORM\Column(name="sat_disk_usage", type="string", length=30, nullable=true)
     */
    private $satDiskUsage;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update_time", type="datetime", nullable=true)
     */
    private $lastUpdateTime;

    /**
     * @var string
     *
     * @ORM\Column(name="sat_firmware", type="string", length=20, nullable=true)
     */
    private $satFirmware;

    /**
     * @var string
     *
     * @ORM\Column(name="sat_layout", type="string", length=20, nullable=true)
     */
    private $satLayout;

    /**
     * @var string
     *
     * @ORM\Column(name="last_sent_cfe", type="string", length=60, nullable=true)
     */
    private $lastSentCfe;

    /**
     * @var string
     *
     * @ORM\Column(name="first_stored_cfe", type="string", length=60, nullable=true)
     */
    private $firstStoredCfe;

    /**
     * @var string
     *
     * @ORM\Column(name="last_stored_cfe", type="string", length=60, nullable=true)
     */
    private $lastStoredCfe;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_sent_time", type="datetime", nullable=true)
     */
    private $lastSentTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_comm_time", type="datetime", nullable=true)
     */
    private $lastCommTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cert_create_date", type="date", nullable=true)
     */
    private $certCreateDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cert_expr_date", type="date", nullable=true)
     */
    private $certExprDate;


}

