<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SaleHistoryWeight
 *
 * @ORM\Table(name="sale_history_weight")
 * @ORM\Entity
 */
class SaleHistoryWeight
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
     * @ORM\Column(name="pos_number", type="smallint", nullable=false)
     */
    private $posNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="ticket_number", type="integer", nullable=false)
     */
    private $ticketNumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_time", type="datetime", nullable=false)
     */
    private $startTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="sequence", type="smallint", nullable=false)
     */
    private $sequence;

    /**
     * @var integer
     *
     * @ORM\Column(name="plu_id", type="bigint", nullable=false)
     */
    private $pluId;

    /**
     * @var integer
     *
     * @ORM\Column(name="authorizer_key", type="bigint", nullable=true)
     */
    private $authorizerKey;

    /**
     * @var string
     *
     * @ORM\Column(name="cad_checkout_weight", type="decimal", precision=7, scale=3, nullable=true)
     */
    private $cadCheckoutWeight;

    /**
     * @var string
     *
     * @ORM\Column(name="self_checkout_weight", type="decimal", precision=7, scale=3, nullable=true)
     */
    private $selfCheckoutWeight;


}

