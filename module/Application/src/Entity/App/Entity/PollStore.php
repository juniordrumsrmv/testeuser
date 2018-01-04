<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PollStore
 *
 * @ORM\Table(name="poll_store")
 * @ORM\Entity
 */
class PollStore
{
    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=false)
     */
    private $storeKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="poll_key", type="bigint", nullable=false)
     */
    private $pollKey;


}

