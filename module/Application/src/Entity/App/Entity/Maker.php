<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Maker
 *
 * @ORM\Table(name="maker", uniqueConstraints={@ORM\UniqueConstraint(name="index_maker_id", columns={"maker_id"})})
 * @ORM\Entity
 */
class Maker
{
    /**
     * @var integer
     *
     * @ORM\Column(name="maker_key", type="bigint", nullable=false)
     */
    private $makerKey;

    /**
     * @var string
     *
     * @ORM\Column(name="maker_id", type="string", length=50, nullable=false)
     */
    private $makerId;

    /**
     * @var integer
     *
     * @ORM\Column(name="maker_id_type", type="smallint", nullable=true)
     */
    private $makerIdType;

    /**
     * @var string
     *
     * @ORM\Column(name="maker_name", type="string", length=50, nullable=true)
     */
    private $makerName;

    /**
     * @var string
     *
     * @ORM\Column(name="maker_razao", type="string", length=50, nullable=true)
     */
    private $makerRazao;

    /**
     * @var string
     *
     * @ORM\Column(name="maker_address", type="string", length=50, nullable=true)
     */
    private $makerAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="maker_comple", type="string", length=20, nullable=true)
     */
    private $makerComple;

    /**
     * @var string
     *
     * @ORM\Column(name="maker_neig", type="string", length=20, nullable=true)
     */
    private $makerNeig;

    /**
     * @var string
     *
     * @ORM\Column(name="maker_city", type="string", length=20, nullable=true)
     */
    private $makerCity;

    /**
     * @var string
     *
     * @ORM\Column(name="maker_state", type="string", length=20, nullable=true)
     */
    private $makerState;

    /**
     * @var string
     *
     * @ORM\Column(name="maker_zip", type="string", length=12, nullable=true)
     */
    private $makerZip;

    /**
     * @var string
     *
     * @ORM\Column(name="maker_email", type="string", length=50, nullable=true)
     */
    private $makerEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="maker_site", type="string", length=50, nullable=true)
     */
    private $makerSite;

    /**
     * @var string
     *
     * @ORM\Column(name="maker_phone1", type="string", length=15, nullable=true)
     */
    private $makerPhone1;

    /**
     * @var string
     *
     * @ORM\Column(name="maker_phone2", type="string", length=15, nullable=true)
     */
    private $makerPhone2;

    /**
     * @var string
     *
     * @ORM\Column(name="maker_contact", type="string", length=20, nullable=true)
     */
    private $makerContact;

    /**
     * @var string
     *
     * @ORM\Column(name="maker_country_code", type="string", length=10, nullable=true)
     */
    private $makerCountryCode;

    /**
     * @var string
     *
     * @ORM\Column(name="maker_state_code", type="string", length=10, nullable=true)
     */
    private $makerStateCode;

    /**
     * @var string
     *
     * @ORM\Column(name="maker_city_code", type="string", length=16, nullable=true)
     */
    private $makerCityCode;


}

