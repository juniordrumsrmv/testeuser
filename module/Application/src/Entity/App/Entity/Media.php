<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Media
 *
 * @ORM\Table(name="media")
 * @ORM\Entity
 */
class Media
{
    /**
     * @var string
     *
     * @ORM\Column(name="media_id", type="string", length=10, nullable=false)
     */
    private $mediaId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_check", type="boolean", nullable=true)
     */
    private $isCheck;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_document", type="boolean", nullable=true)
     */
    private $isDocument;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_credit_card", type="boolean", nullable=true)
     */
    private $isCreditCard;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_debit_card", type="boolean", nullable=true)
     */
    private $isDebitCard;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_extended", type="boolean", nullable=true)
     */
    private $isExtended;

    /**
     * @var integer
     *
     * @ORM\Column(name="base_card_media_id", type="smallint", nullable=true)
     */
    private $baseCardMediaId;


}

