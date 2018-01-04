<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomerAddress
 *
 * @ORM\Table(name="customer_address")
 * @ORM\Entity
 */
class CustomerAddress
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
     * @ORM\Column(name="custaddr_type", type="smallint", nullable=false)
     */
    private $custaddrType;

    /**
     * @var string
     *
     * @ORM\Column(name="custaddr_address", type="string", length=60, nullable=true)
     */
    private $custaddrAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="custaddr_number", type="string", length=20, nullable=true)
     */
    private $custaddrNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="custaddr_comple", type="string", length=20, nullable=true)
     */
    private $custaddrComple;

    /**
     * @var string
     *
     * @ORM\Column(name="custaddr_neig", type="string", length=20, nullable=true)
     */
    private $custaddrNeig;

    /**
     * @var string
     *
     * @ORM\Column(name="custaddr_city", type="string", length=20, nullable=true)
     */
    private $custaddrCity;

    /**
     * @var string
     *
     * @ORM\Column(name="custaddr_state", type="string", length=20, nullable=true)
     */
    private $custaddrState;

    /**
     * @var string
     *
     * @ORM\Column(name="custaddr_zip", type="string", length=12, nullable=true)
     */
    private $custaddrZip;

    /**
     * @var string
     *
     * @ORM\Column(name="custaddr_reference", type="string", length=60, nullable=true)
     */
    private $custaddrReference;

    /**
     * @var string
     *
     * @ORM\Column(name="custaddr_phone_area_code", type="string", length=16, nullable=true)
     */
    private $custaddrPhoneAreaCode;

    /**
     * @var string
     *
     * @ORM\Column(name="custaddr_phone_number", type="string", length=16, nullable=true)
     */
    private $custaddrPhoneNumber;

    /**
     * @var boolean
     *
     * @ORM\Column(name="custaddr_addr_time", type="boolean", nullable=true)
     */
    private $custaddrAddrTime;

    /**
     * @var string
     *
     * @ORM\Column(name="custaddr_country_code", type="string", length=10, nullable=true)
     */
    private $custaddrCountryCode;

    /**
     * @var string
     *
     * @ORM\Column(name="custaddr_state_code", type="string", length=10, nullable=true)
     */
    private $custaddrStateCode;

    /**
     * @var string
     *
     * @ORM\Column(name="custaddr_city_code", type="string", length=16, nullable=true)
     */
    private $custaddrCityCode;


}

