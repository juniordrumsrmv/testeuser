<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StatusType
 *
 * @ORM\Table(name="status_type")
 * @ORM\Entity
 */
class StatusType
{
    /**
     * @var integer
     *
     * @ORM\Column(name="status_type_key", type="smallint", nullable=false)
     */
    private $statusTypeKey;

    /**
     * @var string
     *
     * @ORM\Column(name="status_type_name", type="string", length=20, nullable=true)
     */
    private $statusTypeName;

    /**
     * @var string
     *
     * @ORM\Column(name="status_type_msg", type="string", length=60, nullable=true)
     */
    private $statusTypeMsg;


}

