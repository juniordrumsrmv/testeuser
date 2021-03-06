<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SaleMediaData
 *
 * @ORM\Table(name="sale_media_data")
 * @ORM\Entity
 */
class SaleMediaData
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
     * @var integer
     *
     * @ORM\Column(name="sequence", type="smallint", nullable=false)
     */
    private $sequence;

    /**
     * @var integer
     *
     * @ORM\Column(name="data_id", type="smallint", nullable=false)
     */
    private $dataId;

    /**
     * @var string
     *
     * @ORM\Column(name="data_label", type="string", length=64, nullable=true)
     */
    private $dataLabel;

    /**
     * @var string
     *
     * @ORM\Column(name="data_value", type="string", length=64, nullable=true)
     */
    private $dataValue;


}

