<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * City
 *
 * @ORM\Table(name="city", indexes={@ORM\Index(name="index_city_name_sound", columns={"city_name_sound"})})
 * @ORM\Entity
 */
class City
{
    /**
     * @var string
     *
     * @ORM\Column(name="country_code", type="string", length=10, nullable=false)
     */
    private $countryCode = '';

    /**
     * @var string
     *
     * @ORM\Column(name="city_code", type="string", length=16, nullable=false)
     */
    private $cityCode = '';

    /**
     * @var string
     *
     * @ORM\Column(name="state_code", type="string", length=10, nullable=true)
     */
    private $stateCode;

    /**
     * @var string
     *
     * @ORM\Column(name="city_name", type="string", length=255, nullable=true)
     */
    private $cityName;

    /**
     * @var string
     *
     * @ORM\Column(name="city_name_sound", type="string", length=255, nullable=true)
     */
    private $cityNameSound;


}

