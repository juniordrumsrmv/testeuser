<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StatusGroup
 *
 * @ORM\Table(name="status_group")
 * @ORM\Entity
 */
class StatusGroup
{
    /**
     * @var integer
     *
     * @ORM\Column(name="status_type_key", type="smallint", nullable=false)
     */
    private $statusTypeKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="group_key", type="bigint", nullable=false)
     */
    private $groupKey;


}

