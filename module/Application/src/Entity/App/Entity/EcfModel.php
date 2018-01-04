<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EcfModel
 *
 * @ORM\Table(name="ecf_model", indexes={@ORM\Index(name="index_ecf_model", columns={"ecf_model"})})
 * @ORM\Entity
 */
class EcfModel
{
    /**
     * @var string
     *
     * @ORM\Column(name="ecf_manufacturer", type="string", length=40, nullable=false)
     */
    private $ecfManufacturer;

    /**
     * @var string
     *
     * @ORM\Column(name="ecf_model", type="string", length=40, nullable=false)
     */
    private $ecfModel;

    /**
     * @var string
     *
     * @ORM\Column(name="code_m", type="string", length=2, nullable=false)
     */
    private $codeM;


}

