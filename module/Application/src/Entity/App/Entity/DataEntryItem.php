<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DataEntryItem
 *
 * @ORM\Table(name="data_entry_item")
 * @ORM\Entity
 */
class DataEntryItem
{
    /**
     * @var integer
     *
     * @ORM\Column(name="data_entry_key", type="integer", nullable=false)
     */
    private $dataEntryKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="data_entry_item_key", type="smallint", nullable=false)
     */
    private $dataEntryItemKey;

    /**
     * @var string
     *
     * @ORM\Column(name="prompt", type="string", length=80, nullable=true)
     */
    private $prompt;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=1, nullable=true)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="minimum", type="bigint", nullable=true)
     */
    private $minimum;

    /**
     * @var integer
     *
     * @ORM\Column(name="maximum", type="bigint", nullable=true)
     */
    private $maximum;

    /**
     * @var boolean
     *
     * @ORM\Column(name="required", type="boolean", nullable=true)
     */
    private $required;


}

