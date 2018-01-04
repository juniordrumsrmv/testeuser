<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PollDepartment
 *
 * @ORM\Table(name="poll_department")
 * @ORM\Entity
 */
class PollDepartment
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
     * @ORM\Column(name="poll_key", type="bigint", nullable=false)
     */
    private $pollKey;


}

