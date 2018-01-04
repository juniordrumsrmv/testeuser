<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BankingLocationAmount
 *
 * @ORM\Table(name="banking_location_amount", indexes={@ORM\Index(name="index_banking_location_amount_1", columns={"location_key", "reference_date", "extended_media_id"})})
 * @ORM\Entity
 */
class BankingLocationAmount
{
    /**
     * @var integer
     *
     * @ORM\Column(name="location_key", type="smallint", nullable=false)
     */
    private $locationKey;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="reference_date", type="date", nullable=false)
     */
    private $referenceDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="media_id", type="smallint", nullable=false)
     */
    private $mediaId;

    /**
     * @var string
     *
     * @ORM\Column(name="amount_added", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $amountAdded;

    /**
     * @var string
     *
     * @ORM\Column(name="amount_subtracted", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $amountSubtracted;

    /**
     * @var integer
     *
     * @ORM\Column(name="extended_media_id", type="smallint", nullable=true)
     */
    private $extendedMediaId;


}

