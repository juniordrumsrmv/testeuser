<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CashierDocumentData
 *
 * @ORM\Table(name="cashier_document_data")
 * @ORM\Entity
 */
class CashierDocumentData
{
    /**
     * @var integer
     *
     * @ORM\Column(name="cashier_document_key", type="bigint", nullable=false)
     */
    private $cashierDocumentKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="data_id", type="smallint", nullable=false)
     */
    private $dataId;

    /**
     * @var string
     *
     * @ORM\Column(name="data_value", type="string", length=80, nullable=true)
     */
    private $dataValue;

    /**
     * @var string
     *
     * @ORM\Column(name="data_extra", type="string", length=80, nullable=true)
     */
    private $dataExtra;


}

