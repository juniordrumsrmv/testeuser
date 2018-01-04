<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomerOblataTrnPts
 *
 * @ORM\Table(name="customer_oblata_trn_pts", indexes={@ORM\Index(name="promokey_pts", columns={"promotion_key", "customer_key"}), @ORM\Index(name="custkey_pts", columns={"customer_key", "promotion_key"})})
 * @ORM\Entity
 */
class CustomerOblataTrnPts
{
    /**
     * @var integer
     *
     * @ORM\Column(name="promotion_key", type="bigint", nullable=true)
     */
    private $promotionKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="customer_key", type="bigint", nullable=true)
     */
    private $customerKey;

    /**
     * @var string
     *
     * @ORM\Column(name="promotion_points", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $promotionPoints;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_transaction", type="datetime", nullable=true)
     */
    private $dateTransaction;

    /**
     * @var string
     *
     * @ORM\Column(name="agent_id", type="string", length=10, nullable=true)
     */
    private $agentId;

    /**
     * @var string
     *
     * @ORM\Column(name="type_transaction", type="string", length=1, nullable=true)
     */
    private $typeTransaction;

    /**
     * @var integer
     *
     * @ORM\Column(name="reason_type_key", type="integer", nullable=true)
     */
    private $reasonTypeKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="pos_number", type="smallint", nullable=true)
     */
    private $posNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=true)
     */
    private $storeKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="ticket_number", type="integer", nullable=true)
     */
    private $ticketNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="trn_number", type="integer", nullable=true)
     */
    private $trnNumber;


}

