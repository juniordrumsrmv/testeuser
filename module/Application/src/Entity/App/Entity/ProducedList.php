<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProducedList
 *
 * @ORM\Table(name="produced_list")
 * @ORM\Entity
 */
class ProducedList
{
    /**
     * @var integer
     *
     * @ORM\Column(name="plu_key_prod", type="bigint", nullable=false)
     */
    private $pluKeyProd;

    /**
     * @var integer
     *
     * @ORM\Column(name="plu_key_input", type="bigint", nullable=false)
     */
    private $pluKeyInput;

    /**
     * @var string
     *
     * @ORM\Column(name="quantity", type="decimal", precision=6, scale=3, nullable=false)
     */
    private $quantity;


}

