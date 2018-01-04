<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ScanntechTicket
 *
 * @ORM\Table(name="scanntech_ticket", indexes={@ORM\Index(name="Index1", columns={"store_key", "pos_number", "ticket_number", "fiscal_date"}), @ORM\Index(name="Index2", columns={"store_key", "pos_number", "ticket_number", "fiscal_date", "sale_type"})})
 * @ORM\Entity
 */
class ScanntechTicket
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
     * @ORM\Column(name="fiscal_date", type="date", nullable=false)
     */
    private $fiscalDate = '0000-00-00';

    /**
     * @var integer
     *
     * @ORM\Column(name="sale_type", type="smallint", nullable=false)
     */
    private $saleType = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_time", type="datetime", nullable=true)
     */
    private $startTime;

    /**
     * @var string
     *
     * @ORM\Column(name="amount_due", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $amountDue = '0.000';

    /**
     * @var string
     *
     * @ORM\Column(name="discount", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $discount = '0.000';

    /**
     * @var string
     *
     * @ORM\Column(name="file_path", type="string", length=255, nullable=false)
     */
    private $filePath;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="smallint", nullable=false)
     */
    private $status = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="erro", type="smallint", nullable=false)
     */
    private $erro = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="rsl_mensagens", type="text", nullable=true)
     */
    private $rslMensagens;

    /**
     * @var string
     *
     * @ORM\Column(name="data", type="blob", length=65535, nullable=true)
     */
    private $data;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_time", type="datetime", nullable=true)
     */
    private $lastTime;


}

