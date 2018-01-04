<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CstType
 *
 * @ORM\Table(name="cst_type")
 * @ORM\Entity
 */
class CstType
{
    /**
     * @var integer
     *
     * @ORM\Column(name="cst_type_key", type="smallint", nullable=false)
     */
    private $cstTypeKey;

    /**
     * @var string
     *
     * @ORM\Column(name="cst_name", type="string", length=20, nullable=false)
     */
    private $cstName;

    /**
     * @var string
     *
     * @ORM\Column(name="cst_discount", type="decimal", precision=6, scale=2, nullable=true)
     */
    private $cstDiscount;

    /**
     * @var boolean
     *
     * @ORM\Column(name="cst_second_ticket", type="boolean", nullable=true)
     */
    private $cstSecondTicket;

    /**
     * @var integer
     *
     * @ORM\Column(name="cst_type_price", type="integer", nullable=true)
     */
    private $cstTypePrice;

    /**
     * @var string
     *
     * @ORM\Column(name="cst_extra_discount", type="decimal", precision=6, scale=2, nullable=true)
     */
    private $cstExtraDiscount;

    /**
     * @var integer
     *
     * @ORM\Column(name="cst_extra_type_price", type="integer", nullable=true)
     */
    private $cstExtraTypePrice;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_change_time", type="datetime", nullable=true)
     */
    private $lastChangeTime;


}

