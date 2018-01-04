<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Department
 *
 * @ORM\Table(name="department", uniqueConstraints={@ORM\UniqueConstraint(name="index_department_id", columns={"id"})})
 * @ORM\Entity
 */
class Department
{
    /**
     * @var integer
     *
     * @ORM\Column(name="department_key", type="smallint", nullable=false)
     */
    private $departmentKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="parent_department_key", type="smallint", nullable=true)
     */
    private $parentDepartmentKey;

    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=12, nullable=false)
     */
    private $id = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allow_plu", type="boolean", nullable=true)
     */
    private $allowPlu;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=true)
     */
    private $name;


}

