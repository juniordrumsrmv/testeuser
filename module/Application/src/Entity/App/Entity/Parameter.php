<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Parameter
 *
 * @ORM\Table(name="parameter")
 * @ORM\Entity
 */
class Parameter
{
    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=false)
     */
    private $storeKey = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="prm_id", type="string", length=10, nullable=false)
     */
    private $prmId = '';

    /**
     * @var string
     *
     * @ORM\Column(name="prm_value", type="string", length=255, nullable=true)
     */
    private $prmValue;


}

