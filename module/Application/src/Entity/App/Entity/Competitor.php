<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Competitor
 *
 * @ORM\Table(name="competitor", indexes={@ORM\Index(name="index_compe_name", columns={"store_key", "compet_name"}), @ORM\Index(name="index_compe_flag", columns={"store_key", "compet_flag"})})
 * @ORM\Entity
 */
class Competitor
{
    /**
     * @var integer
     *
     * @ORM\Column(name="compet_key", type="bigint", nullable=false)
     */
    private $competKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=false)
     */
    private $storeKey;

    /**
     * @var string
     *
     * @ORM\Column(name="compet_name", type="string", length=50, nullable=false)
     */
    private $competName;

    /**
     * @var string
     *
     * @ORM\Column(name="compet_flag", type="string", length=50, nullable=true)
     */
    private $competFlag;

    /**
     * @var string
     *
     * @ORM\Column(name="compet_address", type="string", length=50, nullable=true)
     */
    private $competAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="compet_comple", type="string", length=20, nullable=true)
     */
    private $competComple;

    /**
     * @var string
     *
     * @ORM\Column(name="compet_neig", type="string", length=20, nullable=true)
     */
    private $competNeig;

    /**
     * @var string
     *
     * @ORM\Column(name="compet_city", type="string", length=20, nullable=true)
     */
    private $competCity;

    /**
     * @var string
     *
     * @ORM\Column(name="compet_state", type="string", length=20, nullable=true)
     */
    private $competState;

    /**
     * @var string
     *
     * @ORM\Column(name="compet_zip", type="string", length=12, nullable=true)
     */
    private $competZip;

    /**
     * @var string
     *
     * @ORM\Column(name="compet_email", type="string", length=50, nullable=true)
     */
    private $competEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="compet_site", type="string", length=50, nullable=true)
     */
    private $competSite;

    /**
     * @var string
     *
     * @ORM\Column(name="compet_phone", type="string", length=15, nullable=true)
     */
    private $competPhone;

    /**
     * @var string
     *
     * @ORM\Column(name="compet_contact", type="string", length=20, nullable=true)
     */
    private $competContact;

    /**
     * @var string
     *
     * @ORM\Column(name="compet_country_code", type="string", length=10, nullable=true)
     */
    private $competCountryCode;

    /**
     * @var string
     *
     * @ORM\Column(name="compet_state_code", type="string", length=10, nullable=true)
     */
    private $competStateCode;

    /**
     * @var string
     *
     * @ORM\Column(name="compet_city_code", type="string", length=16, nullable=true)
     */
    private $competCityCode;

    /**
     * @var boolean
     *
     * @ORM\Column(name="compet_status", type="boolean", nullable=true)
     */
    private $competStatus;


}

