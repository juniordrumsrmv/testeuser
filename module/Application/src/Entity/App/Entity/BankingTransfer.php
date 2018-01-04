<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BankingTransfer
 *
 * @ORM\Table(name="banking_transfer")
 * @ORM\Entity
 */
class BankingTransfer
{
    /**
     * @var integer
     *
     * @ORM\Column(name="transfer_key", type="bigint", nullable=false)
     */
    private $transferKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=false)
     */
    private $storeKey;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="reference_date", type="date", nullable=false)
     */
    private $referenceDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="from_location_key", type="smallint", nullable=true)
     */
    private $fromLocationKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="to_location_key", type="smallint", nullable=true)
     */
    private $toLocationKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="block_transfer_key", type="bigint", nullable=true)
     */
    private $blockTransferKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="banking_unit_key", type="bigint", nullable=true)
     */
    private $bankingUnitKey;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creation_time", type="datetime", nullable=true)
     */
    private $creationTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_key", type="bigint", nullable=true)
     */
    private $userKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="authorizer_key", type="bigint", nullable=true)
     */
    private $authorizerKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="media_id", type="smallint", nullable=true)
     */
    private $mediaId;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $amount;

    /**
     * @var integer
     *
     * @ORM\Column(name="transaction_type_key", type="smallint", nullable=true)
     */
    private $transactionTypeKey;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="extended_media_id", type="smallint", nullable=true)
     */
    private $extendedMediaId;


}

