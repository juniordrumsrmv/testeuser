<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PollCstType
 *
 * @ORM\Table(name="poll_cst_type")
 * @ORM\Entity
 */
class PollCstType
{
    /**
     * @var integer
     *
     * @ORM\Column(name="cst_type_key", type="smallint", nullable=false)
     */
    private $cstTypeKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="poll_key", type="bigint", nullable=false)
     */
    private $pollKey;


}

