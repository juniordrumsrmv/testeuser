<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PromotionMedia
 *
 * @ORM\Table(name="promotion_media")
 * @ORM\Entity
 */
class PromotionMedia
{
    /**
     * @var integer
     *
     * @ORM\Column(name="promotion_key", type="bigint", nullable=false)
     */
    private $promotionKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="media_id", type="smallint", nullable=false)
     */
    private $mediaId;

    /**
     * @var integer
     *
     * @ORM\Column(name="sub_media_id", type="smallint", nullable=false)
     */
    private $subMediaId;

    /**
     * @var string
     *
     * @ORM\Column(name="media_bin", type="string", length=60, nullable=false)
     */
    private $mediaBin;

    /**
     * @var integer
     *
     * @ORM\Column(name="splits", type="smallint", nullable=false)
     */
    private $splits;

    /**
     * @var integer
     *
     * @ORM\Column(name="media_type", type="smallint", nullable=true)
     */
    private $mediaType;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=true)
     */
    private $status;


}

