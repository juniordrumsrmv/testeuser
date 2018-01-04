<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PluScreen
 *
 * @ORM\Table(name="plu_screen")
 * @ORM\Entity
 */
class PluScreen
{
    /**
     * @var integer
     *
     * @ORM\Column(name="group_type", type="smallint", nullable=false)
     */
    private $groupType = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="plu_key", type="bigint", nullable=false)
     */
    private $pluKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="group_screen_key", type="smallint", nullable=false)
     */
    private $groupScreenKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=false)
     */
    private $storeKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="store_group_key", type="smallint", nullable=false)
     */
    private $storeGroupKey = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="screen_description", type="string", length=80, nullable=true)
     */
    private $screenDescription;

    /**
     * @var integer
     *
     * @ORM\Column(name="screen_position", type="smallint", nullable=true)
     */
    private $screenPosition;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=true)
     */
    private $status;


}

