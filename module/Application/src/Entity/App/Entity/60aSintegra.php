<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 60aSintegra
 *
 * @ORM\Table(name="60A_sintegra", indexes={@ORM\Index(name="index_60A", columns={"store_key", "fiscal_date", "ecf_serial", "pos_id"})})
 * @ORM\Entity
 */
class 60aSintegra
{
    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=false)
     */
    private $storeKey;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=2, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="sub_type", type="string", length=1, nullable=false)
     */
    private $subType;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fiscal_date", type="date", nullable=false)
     */
    private $fiscalDate;

    /**
     * @var string
     *
     * @ORM\Column(name="ecf_serial", type="string", length=20, nullable=false)
     */
    private $ecfSerial;

    /**
     * @var string
     *
     * @ORM\Column(name="pos_id", type="string", length=4, nullable=false)
     */
    private $posId;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=12, scale=2, nullable=false)
     */
    private $amount;


}

