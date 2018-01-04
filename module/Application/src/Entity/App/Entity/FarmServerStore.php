<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FarmServerStore
 *
 * @ORM\Table(name="farm_server_store")
 * @ORM\Entity
 */
class FarmServerStore
{
    /**
     * @var integer
     *
     * @ORM\Column(name="farm_server_key", type="smallint", nullable=false)
     */
    private $farmServerKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=false)
     */
    private $storeKey;


}

