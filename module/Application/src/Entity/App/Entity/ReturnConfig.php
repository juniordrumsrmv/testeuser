<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReturnConfig
 *
 * @ORM\Table(name="return_config")
 * @ORM\Entity
 */
class ReturnConfig
{
    /**
     * @var integer
     *
     * @ORM\Column(name="return_type", type="smallint", nullable=false)
     */
    private $returnType;

    /**
     * @var integer
     *
     * @ORM\Column(name="record_return_control", type="smallint", nullable=true)
     */
    private $recordReturnControl;

    /**
     * @var integer
     *
     * @ORM\Column(name="record_sale", type="smallint", nullable=true)
     */
    private $recordSale;

    /**
     * @var integer
     *
     * @ORM\Column(name="issue_customer_print", type="smallint", nullable=true)
     */
    private $issueCustomerPrint;

    /**
     * @var integer
     *
     * @ORM\Column(name="show_amount_print", type="smallint", nullable=true)
     */
    private $showAmountPrint;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_change_time", type="datetime", nullable=true)
     */
    private $lastChangeTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="return_status", type="smallint", nullable=true)
     */
    private $returnStatus;

    /**
     * @var integer
     *
     * @ORM\Column(name="return_barcode", type="smallint", nullable=true)
     */
    private $returnBarcode;

    /**
     * @var integer
     *
     * @ORM\Column(name="return_layout", type="smallint", nullable=true)
     */
    private $returnLayout;


}

