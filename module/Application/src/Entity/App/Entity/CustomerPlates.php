<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomerPlates
 *
 * @ORM\Table(name="customer_plates")
 * @ORM\Entity
 */
class CustomerPlates
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
     * @ORM\Column(name="dependent_id", type="bigint", nullable=false)
     */
    private $dependentId;

    /**
     * @var string
     *
     * @ORM\Column(name="plate_number", type="string", length=10, nullable=false)
     */
    private $plateNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="brand", type="string", length=30, nullable=true)
     */
    private $brand;

    /**
     * @var string
     *
     * @ORM\Column(name="model", type="string", length=30, nullable=true)
     */
    private $model;

    /**
     * @var string
     *
     * @ORM\Column(name="km", type="string", length=11, nullable=true)
     */
    private $km;


}

