<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TaxType
 *
 * @ORM\Table(name="tax_type", uniqueConstraints={@ORM\UniqueConstraint(name="index_tax_type_pos_id", columns={"pos_id"})})
 * @ORM\Entity
 */
class TaxType
{
    /**
     * @var integer
     *
     * @ORM\Column(name="tax_type_key", type="integer", nullable=false)
     */
    private $taxTypeKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="type_key", type="smallint", nullable=false)
     */
    private $typeKey = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="percent", type="decimal", precision=6, scale=4, nullable=false)
     */
    private $percent = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="extra_percent", type="decimal", precision=6, scale=4, nullable=false)
     */
    private $extraPercent = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=40, nullable=false)
     */
    private $description = '';

    /**
     * @var string
     *
     * @ORM\Column(name="pos_id", type="string", length=4, nullable=false)
     */
    private $posId = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="interest_plu", type="bigint", nullable=true)
     */
    private $interestPlu;

    /**
     * @var boolean
     *
     * @ORM\Column(name="allow_map", type="boolean", nullable=true)
     */
    private $allowMap;

    /**
     * @var string
     *
     * @ORM\Column(name="extra", type="string", length=10, nullable=true)
     */
    private $extra;


}

