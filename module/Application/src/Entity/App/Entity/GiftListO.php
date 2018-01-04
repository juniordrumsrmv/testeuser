<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GiftListO
 *
 * @ORM\Table(name="gift_list_o", indexes={@ORM\Index(name="index_type", columns={"gift_list_key"}), @ORM\Index(name="index_name", columns={"groom_name"}), @ORM\Index(name="index_name2", columns={"bride_name"})})
 * @ORM\Entity
 */
class GiftListO
{
    /**
     * @var integer
     *
     * @ORM\Column(name="gift_list_key", type="bigint", nullable=false)
     */
    private $giftListKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="list_type_key", type="smallint", nullable=false)
     */
    private $listTypeKey;

    /**
     * @var string
     *
     * @ORM\Column(name="gift_list_password", type="string", length=50, nullable=true)
     */
    private $giftListPassword;

    /**
     * @var integer
     *
     * @ORM\Column(name="gift_list_status", type="smallint", nullable=false)
     */
    private $giftListStatus;

    /**
     * @var integer
     *
     * @ORM\Column(name="groom_key", type="bigint", nullable=false)
     */
    private $groomKey;

    /**
     * @var string
     *
     * @ORM\Column(name="groom_name", type="string", length=60, nullable=true)
     */
    private $groomName;

    /**
     * @var string
     *
     * @ORM\Column(name="groom_phone", type="string", length=15, nullable=true)
     */
    private $groomPhone;

    /**
     * @var integer
     *
     * @ORM\Column(name="bride_key", type="bigint", nullable=false)
     */
    private $brideKey;

    /**
     * @var string
     *
     * @ORM\Column(name="bride_name", type="string", length=60, nullable=true)
     */
    private $brideName;

    /**
     * @var string
     *
     * @ORM\Column(name="bride_phone", type="string", length=15, nullable=true)
     */
    private $bridePhone;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="gift_list_date_wedding", type="date", nullable=false)
     */
    private $giftListDateWedding;

    /**
     * @var string
     *
     * @ORM\Column(name="gift_list_location", type="string", length=60, nullable=true)
     */
    private $giftListLocation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="gift_list_date_inc", type="date", nullable=false)
     */
    private $giftListDateInc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="gift_list_date_alt", type="date", nullable=true)
     */
    private $giftListDateAlt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="gift_list_date_ent1", type="date", nullable=true)
     */
    private $giftListDateEnt1;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="gift_list_date_ent2", type="date", nullable=true)
     */
    private $giftListDateEnt2;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="gift_list_date_end", type="date", nullable=false)
     */
    private $giftListDateEnd;

    /**
     * @var string
     *
     * @ORM\Column(name="gift_list_obs", type="string", length=255, nullable=true)
     */
    private $giftListObs;


}

