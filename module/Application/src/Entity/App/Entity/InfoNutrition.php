<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InfoNutrition
 *
 * @ORM\Table(name="info_nutrition")
 * @ORM\Entity
 */
class InfoNutrition
{
    /**
     * @var integer
     *
     * @ORM\Column(name="plu_key", type="bigint", nullable=false)
     */
    private $pluKey;

    /**
     * @var string
     *
     * @ORM\Column(name="quantity_portion", type="decimal", precision=8, scale=3, nullable=true)
     */
    private $quantityPortion = '0.000';

    /**
     * @var integer
     *
     * @ORM\Column(name="unit_portion", type="smallint", nullable=true)
     */
    private $unitPortion = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="full_part", type="decimal", precision=8, scale=3, nullable=true)
     */
    private $fullPart = '0.000';

    /**
     * @var integer
     *
     * @ORM\Column(name="decimal_household_measure", type="smallint", nullable=true)
     */
    private $decimalHouseholdMeasure = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="household_measure", type="smallint", nullable=true)
     */
    private $householdMeasure = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="smallint", nullable=true)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="caloric_value", type="smallint", nullable=true)
     */
    private $caloricValue = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="carbohydrates", type="decimal", precision=4, scale=1, nullable=true)
     */
    private $carbohydrates = '0.0';

    /**
     * @var string
     *
     * @ORM\Column(name="protein", type="decimal", precision=3, scale=1, nullable=true)
     */
    private $protein = '0.0';

    /**
     * @var string
     *
     * @ORM\Column(name="total_fat", type="decimal", precision=3, scale=1, nullable=true)
     */
    private $totalFat = '0.0';

    /**
     * @var string
     *
     * @ORM\Column(name="saturated_fat", type="decimal", precision=3, scale=1, nullable=true)
     */
    private $saturatedFat = '0.0';

    /**
     * @var string
     *
     * @ORM\Column(name="trans_fat", type="decimal", precision=3, scale=1, nullable=true)
     */
    private $transFat = '0.0';

    /**
     * @var string
     *
     * @ORM\Column(name="dietary_fiber", type="decimal", precision=3, scale=1, nullable=true)
     */
    private $dietaryFiber = '0.0';

    /**
     * @var string
     *
     * @ORM\Column(name="sodium", type="decimal", precision=5, scale=1, nullable=true)
     */
    private $sodium = '0.0';


}

