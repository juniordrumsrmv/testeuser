<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SerasaGroup
 *
 * @ORM\Table(name="serasa_group")
 * @ORM\Entity
 */
class SerasaGroup
{
    /**
     * @var integer
     *
     * @ORM\Column(name="serasa_type_key", type="smallint", nullable=false)
     */
    private $serasaTypeKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="group_key", type="bigint", nullable=false)
     */
    private $groupKey;


}

