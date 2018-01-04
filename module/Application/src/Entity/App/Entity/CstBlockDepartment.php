<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CstBlockDepartment
 *
 * @ORM\Table(name="cst_block_department")
 * @ORM\Entity
 */
class CstBlockDepartment
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
     * @var \DateTime
     *
     * @ORM\Column(name="last_change_time", type="datetime", nullable=true)
     */
    private $lastChangeTime;


}

