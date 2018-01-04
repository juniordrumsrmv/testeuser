<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LabelType
 *
 * @ORM\Table(name="label_type")
 * @ORM\Entity
 */
class LabelType
{
    /**
     * @var integer
     *
     * @ORM\Column(name="label_key", type="smallint", nullable=false)
     */
    private $labelKey;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=true)
     */
    private $name;


}

