<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NetworkType
 *
 * @ORM\Table(name="network_type")
 * @ORM\Entity
 */
class NetworkType
{
    /**
     * @var integer
     *
     * @ORM\Column(name="network_key", type="smallint", nullable=false)
     */
    private $networkKey;

    /**
     * @var string
     *
     * @ORM\Column(name="network_name", type="string", length=30, nullable=true)
     */
    private $networkName;


}

