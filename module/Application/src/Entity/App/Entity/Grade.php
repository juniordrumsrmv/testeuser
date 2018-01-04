<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Grade
 *
 * @ORM\Table(name="grade")
 * @ORM\Entity
 */
class Grade
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
     * @ORM\Column(name="entity_id", type="string", length=10, nullable=false)
     */
    private $entityId;

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

