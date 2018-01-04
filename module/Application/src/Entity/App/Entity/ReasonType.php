<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReasonType
 *
 * @ORM\Table(name="reason_type")
 * @ORM\Entity
 */
class ReasonType
{
    /**
     * @var integer
     *
     * @ORM\Column(name="reason_type_key", type="integer", nullable=false)
     */
    private $reasonTypeKey;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="reason_command", type="bigint", nullable=false)
     */
    private $reasonCommand;

    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=true)
     */
    private $storeKey;


}

