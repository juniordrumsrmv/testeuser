<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ConciliationNfce
 *
 * @ORM\Table(name="conciliation_nfce")
 * @ORM\Entity
 */
class ConciliationNfce
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
     * @var string
     *
     * @ORM\Column(name="nfce_key", type="string", length=64, nullable=false)
     */
    private $nfceKey = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fiscal_date", type="date", nullable=false)
     */
    private $fiscalDate;

    /**
     * @var string
     *
     * @ORM\Column(name="nfce_number", type="string", length=50, nullable=false)
     */
    private $nfceNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="ticket_number", type="string", length=50, nullable=false)
     */
    private $ticketNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $amount;

    /**
     * @var integer
     *
     * @ORM\Column(name="sefaz_status", type="smallint", nullable=true)
     */
    private $sefazStatus;

    /**
     * @var integer
     *
     * @ORM\Column(name="sefaz_cod", type="smallint", nullable=true)
     */
    private $sefazCod;

    /**
     * @var integer
     *
     * @ORM\Column(name="conciliation_status", type="smallint", nullable=true)
     */
    private $conciliationStatus;


}

