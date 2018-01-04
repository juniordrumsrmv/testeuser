<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Budget
 *
 * @ORM\Table(name="budget")
 * @ORM\Entity
 */
class Budget
{
    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=false)
     */
    private $storeKey;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="budget_date", type="date", nullable=false)
     */
    private $budgetDate;

    /**
     * @var string
     *
     * @ORM\Column(name="budget_sale", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $budgetSale;

    /**
     * @var string
     *
     * @ORM\Column(name="budget_margim", type="decimal", precision=9, scale=3, nullable=true)
     */
    private $budgetMargim;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_change_time", type="datetime", nullable=true)
     */
    private $lastChangeTime;


}

