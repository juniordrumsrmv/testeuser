<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PromotionDepartment
 *
 * @ORM\Table(name="promotion_department")
 * @ORM\Entity
 */
class PromotionDepartment
{
    /**
     * @var integer
     *
     * @ORM\Column(name="promotion_key", type="bigint", nullable=false)
     */
    private $promotionKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="department_key", type="bigint", nullable=false)
     */
    private $departmentKey;


}

