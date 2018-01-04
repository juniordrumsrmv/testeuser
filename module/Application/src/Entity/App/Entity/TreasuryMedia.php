<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TreasuryMedia
 *
 * @ORM\Table(name="treasury_media", indexes={@ORM\Index(name="index_treasury_media", columns={"store_key", "location", "media_id"})})
 * @ORM\Entity
 */
class TreasuryMedia
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
     * @ORM\Column(name="location", type="smallint", nullable=false)
     */
    private $location;

    /**
     * @var integer
     *
     * @ORM\Column(name="extended_media_id", type="smallint", nullable=false)
     */
    private $extendedMediaId;

    /**
     * @var integer
     *
     * @ORM\Column(name="media_id", type="smallint", nullable=false)
     */
    private $mediaId;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $amount;


}

