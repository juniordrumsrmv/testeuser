<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ListType
 *
 * @ORM\Table(name="list_type")
 * @ORM\Entity
 */
class ListType
{
    /**
     * @var integer
     *
     * @ORM\Column(name="list_type_key", type="smallint", nullable=false)
     */
    private $listTypeKey;

    /**
     * @var string
     *
     * @ORM\Column(name="list_type_name", type="string", length=50, nullable=true)
     */
    private $listTypeName;

    /**
     * @var string
     *
     * @ORM\Column(name="bonus_percent", type="decimal", precision=6, scale=3, nullable=true)
     */
    private $bonusPercent = '0.000';

    /**
     * @var boolean
     *
     * @ORM\Column(name="delivery", type="boolean", nullable=true)
     */
    private $delivery = '0';


}

