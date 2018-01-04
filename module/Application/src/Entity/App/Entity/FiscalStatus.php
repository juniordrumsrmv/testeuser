<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FiscalStatus
 *
 * @ORM\Table(name="fiscal_status", indexes={@ORM\Index(name="index_ecf_status", columns={"store_key", "ecf_number", "ticket_number", "start_time"}), @ORM\Index(name="index_ecf_status_1", columns={"store_key", "ecf_number", "fiscal_date", "start_time", "ticket_number"})})
 * @ORM\Entity
 */
class FiscalStatus
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
     * @var \DateTime
     *
     * @ORM\Column(name="fiscal_date", type="date", nullable=false)
     */
    private $fiscalDate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="transaction_type", type="boolean", nullable=false)
     */
    private $transactionType;

    /**
     * @var integer
     *
     * @ORM\Column(name="Z_number", type="integer", nullable=false)
     */
    private $zNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="initial_GT", type="decimal", precision=19, scale=3, nullable=false)
     */
    private $initialGt;

    /**
     * @var string
     *
     * @ORM\Column(name="final_GT", type="decimal", precision=19, scale=3, nullable=false)
     */
    private $finalGt;

    /**
     * @var string
     *
     * @ORM\Column(name="void", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $void;

    /**
     * @var string
     *
     * @ORM\Column(name="discount", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $discount;

    /**
     * @var string
     *
     * @ORM\Column(name="increase", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $increase;

    /**
     * @var integer
     *
     * @ORM\Column(name="cashier_key", type="bigint", nullable=true)
     */
    private $cashierKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="authorizer_key", type="bigint", nullable=true)
     */
    private $authorizerKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="ecf_number", type="smallint", nullable=false)
     */
    private $ecfNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="initial_ticket", type="integer", nullable=false)
     */
    private $initialTicket;

    /**
     * @var integer
     *
     * @ORM\Column(name="restart_count", type="integer", nullable=false)
     */
    private $restartCount;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity_void", type="integer", nullable=true)
     */
    private $quantityVoid;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity_discount", type="integer", nullable=true)
     */
    private $quantityDiscount;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity_sale", type="integer", nullable=true)
     */
    private $quantitySale;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity_void_life", type="integer", nullable=true)
     */
    private $quantityVoidLife;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity_nfnv", type="integer", nullable=true)
     */
    private $quantityNfnv;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity_void_nfnv", type="integer", nullable=true)
     */
    private $quantityVoidNfnv;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity_report", type="integer", nullable=true)
     */
    private $quantityReport;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity_ribbon_detail", type="integer", nullable=true)
     */
    private $quantityRibbonDetail;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity_nfv_tef", type="integer", nullable=true)
     */
    private $quantityNfvTef;

    /**
     * @var integer
     *
     * @ORM\Column(name="initial_ticket_fiscal", type="integer", nullable=true)
     */
    private $initialTicketFiscal;

    /**
     * @var integer
     *
     * @ORM\Column(name="finish_ticket_fiscal", type="integer", nullable=true)
     */
    private $finishTicketFiscal;

    /**
     * @var string
     *
     * @ORM\Column(name="time_printing_cupons", type="string", length=20, nullable=true)
     */
    private $timePrintingCupons;

    /**
     * @var string
     *
     * @ORM\Column(name="total_time", type="string", length=20, nullable=true)
     */
    private $totalTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity_report_x", type="integer", nullable=true)
     */
    private $quantityReportX;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity_left_z", type="integer", nullable=true)
     */
    private $quantityLeftZ;

    /**
     * @var string
     *
     * @ORM\Column(name="ecf_mfd", type="string", length=30, nullable=true)
     */
    private $ecfMfd;

    /**
     * @var string
     *
     * @ORM\Column(name="ecf_serial", type="string", length=30, nullable=true)
     */
    private $ecfSerial;

    /**
     * @var string
     *
     * @ORM\Column(name="ecf_version", type="string", length=20, nullable=true)
     */
    private $ecfVersion;

    /**
     * @var string
     *
     * @ORM\Column(name="ecf_model", type="string", length=40, nullable=true)
     */
    private $ecfModel;

    /**
     * @var string
     *
     * @ORM\Column(name="ecf_manufacturer", type="string", length=40, nullable=true)
     */
    private $ecfManufacturer;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_alter", type="datetime", nullable=true)
     */
    private $dateAlter;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_key", type="bigint", nullable=true)
     */
    private $userKey = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="status_inc", type="boolean", nullable=true)
     */
    private $statusInc = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity_mfd_bytes", type="bigint", nullable=true)
     */
    private $quantityMfdBytes = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity_mfd_left_bytes", type="bigint", nullable=true)
     */
    private $quantityMfdLeftBytes = '0';


}

