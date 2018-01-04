<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GroupType
 *
 * @ORM\Table(name="group_type")
 * @ORM\Entity
 */
class GroupType
{
    /**
     * @var integer
     *
     * @ORM\Column(name="group_type_key", type="smallint", nullable=false)
     */
    private $groupTypeKey;

    /**
     * @var string
     *
     * @ORM\Column(name="group_type_name", type="string", length=50, nullable=true)
     */
    private $groupTypeName;


}

