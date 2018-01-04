<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SatModel
 *
 * @ORM\Table(name="sat_model", indexes={@ORM\Index(name="index_sat_model", columns={"sat_model"})})
 * @ORM\Entity
 */
class SatModel
{
    /**
     * @var string
     *
     * @ORM\Column(name="sat_manufacturer", type="string", length=40, nullable=false)
     */
    private $satManufacturer;

    /**
     * @var string
     *
     * @ORM\Column(name="sat_model", type="string", length=40, nullable=false)
     */
    private $satModel;


}

