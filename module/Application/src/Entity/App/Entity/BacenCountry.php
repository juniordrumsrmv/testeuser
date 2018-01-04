<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BacenCountry
 *
 * @ORM\Table(name="bacen_country")
 * @ORM\Entity
 */
class BacenCountry
{
    /**
     * @var integer
     *
     * @ORM\Column(name="country_id", type="integer", nullable=false)
     */
    private $countryId;

    /**
     * @var string
     *
     * @ORM\Column(name="country_name", type="string", length=60, nullable=false)
     */
    private $countryName;


}

