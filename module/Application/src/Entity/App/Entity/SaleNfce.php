<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SaleNfce
 *
 * @ORM\Table(name="sale_nfce")
 * @ORM\Entity
 */
class SaleNfce
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
     * @ORM\Column(name="nfce_number", type="bigint", nullable=false)
     */
    private $nfceNumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_time", type="datetime", nullable=false)
     */
    private $startTime;

    /**
     * @var string
     *
     * @ORM\Column(name="nfce_key", type="string", length=64, nullable=true)
     */
    private $nfceKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="nfce_status", type="smallint", nullable=true)
     */
    private $nfceStatus;

    /**
     * @var integer
     *
     * @ORM\Column(name="sefaz_status", type="smallint", nullable=true)
     */
    private $sefazStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="nfce_protocol", type="string", length=64, nullable=true)
     */
    private $nfceProtocol;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="protocol_date", type="datetime", nullable=true)
     */
    private $protocolDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="emit_date", type="datetime", nullable=true)
     */
    private $emitDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="ticket_number", type="integer", nullable=true)
     */
    private $ticketNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="file_path", type="string", length=255, nullable=true)
     */
    private $filePath;

    /**
     * @var string
     *
     * @ORM\Column(name="sefaz_link", type="text", length=65535, nullable=true)
     */
    private $sefazLink;


}

