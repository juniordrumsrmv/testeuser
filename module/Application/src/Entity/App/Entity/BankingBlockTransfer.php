<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BankingBlockTransfer
 *
 * @ORM\Table(name="banking_block_transfer")
 * @ORM\Entity
 */
class BankingBlockTransfer
{
    /**
     * @var integer
     *
     * @ORM\Column(name="block_transfer_key", type="bigint", nullable=false)
     */
    private $blockTransferKey;

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
     * @var \DateTime
     *
     * @ORM\Column(name="creation_time", type="datetime", nullable=true)
     */
    private $creationTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="change_time", type="datetime", nullable=true)
     */
    private $changeTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="new_location_key", type="smallint", nullable=true)
     */
    private $newLocationKey;

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
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=true)
     */
    private $status;


}

