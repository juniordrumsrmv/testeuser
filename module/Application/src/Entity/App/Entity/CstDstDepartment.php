<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CstDstDepartment
 *
 * @ORM\Table(name="cst_dst_department")
 * @ORM\Entity
 */
class CstDstDepartment
{
    /**
     * @var integer
     *
     * @ORM\Column(name="cst_type_key", type="smallint", nullable=false)
     */
    private $cstTypeKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="department_key", type="smallint", nullable=false)
     */
    private $departmentKey;

    /**
     * @var string
     *
     * @ORM\Column(name="discount", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $discount;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_change_time", type="datetime", nullable=true)
     */
    private $lastChangeTime;


}

