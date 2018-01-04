<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TreasuryMediaHistory
 *
 * @ORM\Table(name="treasury_media_history", indexes={@ORM\Index(name="index_treasury_media_history", columns={"store_key", "location", "media_id"})})
 * @ORM\Entity
 */
class TreasuryMediaHistory
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
     * @ORM\Column(name="location", type="smallint", nullable=false)
     */
    private $location;

    /**
     * @var integer
     *
     * @ORM\Column(name="extended_media_id", type="smallint", nullable=false)
     */
    private $extendedMediaId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_alter", type="datetime", nullable=false)
     */
    private $dateAlter;

    /**
     * @var integer
     *
     * @ORM\Column(name="media_id", type="smallint", nullable=false)
     */
    private $mediaId;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $amount;

    /**
     * @var string
     *
     * @ORM\Column(name="amount_new", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $amountNew;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_key", type="bigint", nullable=true)
     */
    private $userKey;

    /**
     * @var boolean
     *
     * @ORM\Column(name="reason_type_key", type="boolean", nullable=true)
     */
    private $reasonTypeKey = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="trans_type", type="smallint", nullable=true)
     */
    private $transType = '0';


}

