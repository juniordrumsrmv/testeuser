<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CstFiscalType
 *
 * @ORM\Table(name="cst_fiscal_type")
 * @ORM\Entity
 */
class CstFiscalType
{
    /**
     * @var integer
     *
     * @ORM\Column(name="cst_fiscal_type_key", type="smallint", nullable=false)
     */
    private $cstFiscalTypeKey;

    /**
     * @var string
     *
     * @ORM\Column(name="cst_fiscal_type_name", type="string", length=20, nullable=true)
     */
    private $cstFiscalTypeName;

    /**
     * @var integer
     *
     * @ORM\Column(name="cst_fiscal_type_invoice", type="smallint", nullable=true)
     */
    private $cstFiscalTypeInvoice;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cst_fiscal_type_last_change_time", type="datetime", nullable=true)
     */
    private $cstFiscalTypeLastChangeTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="cst_fiscal_type_price", type="integer", nullable=true)
     */
    private $cstFiscalTypePrice = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="cst_fiscal_tax_exception", type="boolean", nullable=true)
     */
    private $cstFiscalTaxException = '0';


}

