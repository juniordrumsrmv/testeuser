<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Plu
 *
 * @ORM\Table(name="plu", uniqueConstraints={@ORM\UniqueConstraint(name="index_plu_id", columns={"id"})}, indexes={@ORM\Index(name="index_plu_change", columns={"last_change_time"}), @ORM\Index(name="index_plu_base", columns={"base_plu_key"}), @ORM\Index(name="index_plu_completion", columns={"conecto_flag_27"})})
 * @ORM\Entity
 */
class Plu
{
    /**
     * @var integer
     *
     * @ORM\Column(name="plu_key", type="bigint", nullable=false)
     */
    private $pluKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     */
    private $id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="base_plu_key", type="bigint", nullable=true)
     */
    private $basePluKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="link_plu_key", type="bigint", nullable=true)
     */
    private $linkPluKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="plu_types", type="smallint", nullable=true)
     */
    private $pluTypes;

    /**
     * @var integer
     *
     * @ORM\Column(name="maker_key", type="bigint", nullable=true)
     */
    private $makerKey;

    /**
     * @var string
     *
     * @ORM\Column(name="short_description", type="string", length=48, nullable=true)
     */
    private $shortDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="long_description", type="string", length=50, nullable=true)
     */
    private $longDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="commercial_description", type="string", length=50, nullable=true)
     */
    private $commercialDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="image_file", type="string", length=255, nullable=true)
     */
    private $imageFile;

    /**
     * @var integer
     *
     * @ORM\Column(name="tax_type_key", type="integer", nullable=true)
     */
    private $taxTypeKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="cost_decimals", type="smallint", nullable=true)
     */
    private $costDecimals;

    /**
     * @var integer
     *
     * @ORM\Column(name="unit_key", type="smallint", nullable=true)
     */
    private $unitKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="price_decimals", type="smallint", nullable=true)
     */
    private $priceDecimals;

    /**
     * @var integer
     *
     * @ORM\Column(name="adder", type="bigint", nullable=true)
     */
    private $adder;

    /**
     * @var integer
     *
     * @ORM\Column(name="department_key", type="smallint", nullable=true)
     */
    private $departmentKey;

    /**
     * @var string
     *
     * @ORM\Column(name="suggested_prompt", type="string", length=80, nullable=true)
     */
    private $suggestedPrompt;

    /**
     * @var integer
     *
     * @ORM\Column(name="data_entry_key", type="integer", nullable=true)
     */
    private $dataEntryKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="tare_key", type="integer", nullable=true)
     */
    private $tareKey;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_change_time", type="datetime", nullable=true)
     */
    private $lastChangeTime;

    /**
     * @var string
     *
     * @ORM\Column(name="clerk_percent", type="decimal", precision=4, scale=2, nullable=true)
     */
    private $clerkPercent;

    /**
     * @var boolean
     *
     * @ORM\Column(name="conecto_flag_00", type="boolean", nullable=true)
     */
    private $conectoFlag00;

    /**
     * @var boolean
     *
     * @ORM\Column(name="has_deposit", type="boolean", nullable=true)
     */
    private $hasDeposit;

    /**
     * @var boolean
     *
     * @ORM\Column(name="has_plu_link", type="boolean", nullable=true)
     */
    private $hasPluLink;

    /**
     * @var boolean
     *
     * @ORM\Column(name="price_required", type="boolean", nullable=true)
     */
    private $priceRequired;

    /**
     * @var boolean
     *
     * @ORM\Column(name="quantity_disallowed", type="boolean", nullable=true)
     */
    private $quantityDisallowed;

    /**
     * @var boolean
     *
     * @ORM\Column(name="quantity_required", type="boolean", nullable=true)
     */
    private $quantityRequired;

    /**
     * @var boolean
     *
     * @ORM\Column(name="decimal_disallowed", type="boolean", nullable=true)
     */
    private $decimalDisallowed;

    /**
     * @var boolean
     *
     * @ORM\Column(name="decimal_required", type="boolean", nullable=true)
     */
    private $decimalRequired;

    /**
     * @var boolean
     *
     * @ORM\Column(name="id_required", type="boolean", nullable=true)
     */
    private $idRequired;

    /**
     * @var boolean
     *
     * @ORM\Column(name="repeat_disallowed", type="boolean", nullable=true)
     */
    private $repeatDisallowed;

    /**
     * @var boolean
     *
     * @ORM\Column(name="scale", type="boolean", nullable=true)
     */
    private $scale;

    /**
     * @var boolean
     *
     * @ORM\Column(name="tracking_total", type="boolean", nullable=true)
     */
    private $trackingTotal;

    /**
     * @var boolean
     *
     * @ORM\Column(name="deposit", type="boolean", nullable=true)
     */
    private $deposit;

    /**
     * @var boolean
     *
     * @ORM\Column(name="non_merchandise", type="boolean", nullable=true)
     */
    private $nonMerchandise;

    /**
     * @var boolean
     *
     * @ORM\Column(name="return_disallowed", type="boolean", nullable=true)
     */
    private $returnDisallowed;

    /**
     * @var boolean
     *
     * @ORM\Column(name="refund_disallowed", type="boolean", nullable=true)
     */
    private $refundDisallowed;

    /**
     * @var boolean
     *
     * @ORM\Column(name="markdown_disallowed", type="boolean", nullable=true)
     */
    private $markdownDisallowed;

    /**
     * @var boolean
     *
     * @ORM\Column(name="rebate", type="boolean", nullable=true)
     */
    private $rebate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="not_for_sale", type="boolean", nullable=true)
     */
    private $notForSale;

    /**
     * @var boolean
     *
     * @ORM\Column(name="negative", type="boolean", nullable=true)
     */
    private $negative;

    /**
     * @var boolean
     *
     * @ORM\Column(name="clerk_required", type="boolean", nullable=true)
     */
    private $clerkRequired;

    /**
     * @var boolean
     *
     * @ORM\Column(name="kit", type="boolean", nullable=true)
     */
    private $kit;

    /**
     * @var boolean
     *
     * @ORM\Column(name="conecto_flag_22", type="boolean", nullable=true)
     */
    private $conectoFlag22;

    /**
     * @var boolean
     *
     * @ORM\Column(name="conecto_flag_23", type="boolean", nullable=true)
     */
    private $conectoFlag23;

    /**
     * @var boolean
     *
     * @ORM\Column(name="conecto_flag_24", type="boolean", nullable=true)
     */
    private $conectoFlag24;

    /**
     * @var boolean
     *
     * @ORM\Column(name="qty_from_amount", type="boolean", nullable=true)
     */
    private $qtyFromAmount;

    /**
     * @var boolean
     *
     * @ORM\Column(name="conecto_flag_26", type="boolean", nullable=true)
     */
    private $conectoFlag26;

    /**
     * @var boolean
     *
     * @ORM\Column(name="conecto_flag_27", type="boolean", nullable=true)
     */
    private $conectoFlag27;

    /**
     * @var boolean
     *
     * @ORM\Column(name="conecto_flag_28", type="boolean", nullable=true)
     */
    private $conectoFlag28;

    /**
     * @var boolean
     *
     * @ORM\Column(name="conecto_flag_29", type="boolean", nullable=true)
     */
    private $conectoFlag29;

    /**
     * @var boolean
     *
     * @ORM\Column(name="conecto_flag_30", type="boolean", nullable=true)
     */
    private $conectoFlag30;

    /**
     * @var boolean
     *
     * @ORM\Column(name="conecto_flag_31", type="boolean", nullable=true)
     */
    private $conectoFlag31;

    /**
     * @var integer
     *
     * @ORM\Column(name="valid_days", type="smallint", nullable=true)
     */
    private $validDays;

    /**
     * @var string
     *
     * @ORM\Column(name="fiscal_class", type="string", length=12, nullable=true)
     */
    private $fiscalClass;

    /**
     * @var boolean
     *
     * @ORM\Column(name="pis_cofins", type="boolean", nullable=true)
     */
    private $pisCofins;

    /**
     * @var string
     *
     * @ORM\Column(name="quantity", type="decimal", precision=9, scale=3, nullable=true)
     */
    private $quantity;

    /**
     * @var string
     *
     * @ORM\Column(name="quantity_min", type="decimal", precision=9, scale=3, nullable=true)
     */
    private $quantityMin;

    /**
     * @var string
     *
     * @ORM\Column(name="quantity_max", type="decimal", precision=9, scale=3, nullable=true)
     */
    private $quantityMax;

    /**
     * @var string
     *
     * @ORM\Column(name="class", type="string", length=25, nullable=true)
     */
    private $class;

    /**
     * @var integer
     *
     * @ORM\Column(name="merchandise_origin", type="smallint", nullable=true)
     */
    private $merchandiseOrigin;

    /**
     * @var integer
     *
     * @ORM\Column(name="merchandise_group", type="bigint", nullable=true)
     */
    private $merchandiseGroup;

    /**
     * @var string
     *
     * @ORM\Column(name="package", type="string", length=6, nullable=true)
     */
    private $package;

    /**
     * @var string
     *
     * @ORM\Column(name="wholesale_quantity", type="decimal", precision=9, scale=3, nullable=true)
     */
    private $wholesaleQuantity;

    /**
     * @var boolean
     *
     * @ORM\Column(name="conecto_flag_32", type="boolean", nullable=true)
     */
    private $conectoFlag32;

    /**
     * @var boolean
     *
     * @ORM\Column(name="conecto_flag_33", type="boolean", nullable=true)
     */
    private $conectoFlag33;

    /**
     * @var boolean
     *
     * @ORM\Column(name="conecto_flag_34", type="boolean", nullable=true)
     */
    private $conectoFlag34;

    /**
     * @var boolean
     *
     * @ORM\Column(name="conecto_flag_35", type="boolean", nullable=true)
     */
    private $conectoFlag35;

    /**
     * @var boolean
     *
     * @ORM\Column(name="conecto_flag_36", type="boolean", nullable=true)
     */
    private $conectoFlag36;

    /**
     * @var boolean
     *
     * @ORM\Column(name="conecto_flag_37", type="boolean", nullable=true)
     */
    private $conectoFlag37;

    /**
     * @var boolean
     *
     * @ORM\Column(name="conecto_flag_38", type="boolean", nullable=true)
     */
    private $conectoFlag38;

    /**
     * @var boolean
     *
     * @ORM\Column(name="conecto_flag_39", type="boolean", nullable=true)
     */
    private $conectoFlag39;

    /**
     * @var boolean
     *
     * @ORM\Column(name="conecto_flag_40", type="boolean", nullable=true)
     */
    private $conectoFlag40;

    /**
     * @var string
     *
     * @ORM\Column(name="message_subtotal", type="string", length=255, nullable=true)
     */
    private $messageSubtotal;

    /**
     * @var integer
     *
     * @ORM\Column(name="standard_unit_key", type="smallint", nullable=true)
     */
    private $standardUnitKey;

    /**
     * @var string
     *
     * @ORM\Column(name="quantity_standard", type="decimal", precision=9, scale=3, nullable=true)
     */
    private $quantityStandard;

    /**
     * @var string
     *
     * @ORM\Column(name="gross_weight", type="decimal", precision=7, scale=3, nullable=true)
     */
    private $grossWeight;

    /**
     * @var string
     *
     * @ORM\Column(name="net_weight", type="decimal", precision=7, scale=3, nullable=true)
     */
    private $netWeight;

    /**
     * @var string
     *
     * @ORM\Column(name="total_tax", type="decimal", precision=7, scale=3, nullable=true)
     */
    private $totalTax;

    /**
     * @var string
     *
     * @ORM\Column(name="sefaz_id", type="string", length=10, nullable=true)
     */
    private $sefazId;

    /**
     * @var string
     *
     * @ORM\Column(name="self_checkout_weight", type="decimal", precision=7, scale=3, nullable=true)
     */
    private $selfCheckoutWeight;

    /**
     * @var string
     *
     * @ORM\Column(name="anp_code", type="string", length=10, nullable=true)
     */
    private $anpCode;

    /**
     * @var integer
     *
     * @ORM\Column(name="pis_tax_type_key", type="integer", nullable=true)
     */
    private $pisTaxTypeKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="cofins_tax_type_key", type="integer", nullable=true)
     */
    private $cofinsTaxTypeKey;

    /**
     * @var string
     *
     * @ORM\Column(name="total_tax1", type="decimal", precision=7, scale=3, nullable=true)
     */
    private $totalTax1;

    /**
     * @var string
     *
     * @ORM\Column(name="total_tax2", type="decimal", precision=7, scale=3, nullable=true)
     */
    private $totalTax2;

    /**
     * @var string
     *
     * @ORM\Column(name="cest_code", type="string", length=12, nullable=true)
     */
    private $cestCode;


}

