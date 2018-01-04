<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BankingTransactionType
 *
 * @ORM\Table(name="banking_transaction_type")
 * @ORM\Entity
 */
class BankingTransactionType
{
    /**
     * @var integer
     *
     * @ORM\Column(name="transaction_type_key", type="smallint", nullable=false)
     */
    private $transactionTypeKey;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=128, nullable=true)
     */
    private $description;

    /**
     * @var boolean
     *
     * @ORM\Column(name="type", type="boolean", nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="observation", type="text", length=65535, nullable=true)
     */
    private $observation;


}

