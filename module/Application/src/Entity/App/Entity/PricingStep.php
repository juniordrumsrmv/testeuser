<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PricingStep
 *
 * @ORM\Table(name="pricing_step", indexes={@ORM\Index(name="pricing_step_1", columns={"plu_key", "type_price", "start"})})
 * @ORM\Entity
 */
class PricingStep
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
     * @ORM\Column(name="plu_key", type="bigint", nullable=false)
     */
    private $pluKey;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start", type="datetime", nullable=false)
     */
    private $start;

    /**
     * @var integer
     *
     * @ORM\Column(name="type_price", type="integer", nullable=false)
     */
    private $typePrice;

    /**
     * @var integer
     *
     * @ORM\Column(name="step_number", type="smallint", nullable=false)
     */
    private $stepNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="action_type", type="smallint", nullable=false)
     */
    private $actionType;

    /**
     * @var integer
     *
     * @ORM\Column(name="times", type="smallint", nullable=true)
     */
    private $times;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $price;

    /**
     * @var integer
     *
     * @ORM\Column(name="next_step", type="smallint", nullable=true)
     */
    private $nextStep;


}

