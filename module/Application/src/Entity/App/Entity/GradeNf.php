<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GradeNf
 *
 * @ORM\Table(name="grade_nf")
 * @ORM\Entity
 */
class GradeNf
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
     * @ORM\Column(name="invoice_type_key", type="smallint", nullable=false)
     */
    private $invoiceTypeKey;

    /**
     * @var string
     *
     * @ORM\Column(name="department_id", type="string", length=12, nullable=false)
     */
    private $departmentId;

    /**
     * @var string
     *
     * @ORM\Column(name="pos_id", type="string", length=4, nullable=false)
     */
    private $posId;

    /**
     * @var string
     *
     * @ORM\Column(name="cfop", type="string", length=8, nullable=true)
     */
    private $cfop;


}

