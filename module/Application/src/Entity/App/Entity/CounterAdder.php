<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CounterAdder
 *
 * @ORM\Table(name="counter_adder", indexes={@ORM\Index(name="counter_1", columns={"store_key", "pos_number", "counter_fiscal_date", "counter_type"})})
 * @ORM\Entity
 */
class CounterAdder
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
     * @ORM\Column(name="pos_number", type="smallint", nullable=false)
     */
    private $posNumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="counter_date", type="date", nullable=false)
     */
    private $counterDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="counter_type", type="smallint", nullable=false)
     */
    private $counterType;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="counter_fiscal_date", type="date", nullable=false)
     */
    private $counterFiscalDate;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $amount;


}

