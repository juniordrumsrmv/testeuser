<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SalePromotionDepartment
 *
 * @ORM\Table(name="sale_promotion_department")
 * @ORM\Entity
 */
class SalePromotionDepartment
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
     * @var integer
     *
     * @ORM\Column(name="ticket_number", type="integer", nullable=false)
     */
    private $ticketNumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fiscal_date", type="date", nullable=false)
     */
    private $fiscalDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="promotion_key", type="bigint", nullable=false)
     */
    private $promotionKey;

    /**
     * @var string
     *
     * @ORM\Column(name="department_id", type="string", length=12, nullable=false)
     */
    private $departmentId;


}

