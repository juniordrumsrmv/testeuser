<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TicketRule
 *
 * @ORM\Table(name="ticket_rule")
 * @ORM\Entity
 */
class TicketRule
{
    /**
     * @var integer
     *
     * @ORM\Column(name="rule_key", type="smallint", nullable=false)
     */
    private $ruleKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="sequence", type="smallint", nullable=false)
     */
    private $sequence;

    /**
     * @var integer
     *
     * @ORM\Column(name="data_id", type="smallint", nullable=true)
     */
    private $dataId;

    /**
     * @var integer
     *
     * @ORM\Column(name="rule_condition", type="smallint", nullable=true)
     */
    private $ruleCondition;

    /**
     * @var string
     *
     * @ORM\Column(name="data_value", type="string", length=128, nullable=true)
     */
    private $dataValue;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=32, nullable=true)
     */
    private $title;

    /**
     * @var integer
     *
     * @ORM\Column(name="nor", type="smallint", nullable=true)
     */
    private $nor;


}

