<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BankingLocation
 *
 * @ORM\Table(name="banking_location")
 * @ORM\Entity
 */
class BankingLocation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="location_key", type="smallint", nullable=false)
     */
    private $locationKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=false)
     */
    private $storeKey;

    /**
     * @var boolean
     *
     * @ORM\Column(name="loc_type", type="boolean", nullable=false)
     */
    private $locType;

    /**
     * @var string
     *
     * @ORM\Column(name="loc_name", type="string", length=50, nullable=true)
     */
    private $locName;

    /**
     * @var string
     *
     * @ORM\Column(name="loc_name_alt", type="string", length=30, nullable=true)
     */
    private $locNameAlt;

    /**
     * @var string
     *
     * @ORM\Column(name="loc_address", type="string", length=50, nullable=true)
     */
    private $locAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="loc_neig", type="string", length=20, nullable=true)
     */
    private $locNeig;

    /**
     * @var string
     *
     * @ORM\Column(name="loc_city", type="string", length=20, nullable=true)
     */
    private $locCity;

    /**
     * @var string
     *
     * @ORM\Column(name="loc_state", type="string", length=20, nullable=true)
     */
    private $locState;

    /**
     * @var string
     *
     * @ORM\Column(name="loc_zip", type="string", length=12, nullable=true)
     */
    private $locZip;

    /**
     * @var integer
     *
     * @ORM\Column(name="loc_bank", type="smallint", nullable=true)
     */
    private $locBank;

    /**
     * @var integer
     *
     * @ORM\Column(name="loc_branch", type="smallint", nullable=true)
     */
    private $locBranch;

    /**
     * @var integer
     *
     * @ORM\Column(name="loc_account", type="integer", nullable=true)
     */
    private $locAccount;

    /**
     * @var integer
     *
     * @ORM\Column(name="loc_cmc", type="integer", nullable=false)
     */
    private $locCmc;

    /**
     * @var integer
     *
     * @ORM\Column(name="loc_ident", type="integer", nullable=false)
     */
    private $locIdent;


}

