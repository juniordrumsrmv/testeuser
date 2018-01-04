<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DotzFileItem
 *
 * @ORM\Table(name="dotz_file_item")
 * @ORM\Entity
 */
class DotzFileItem
{
    /**
     * @var integer
     *
     * @ORM\Column(name="plu_list_id", type="bigint", nullable=false)
     */
    private $pluListId;

    /**
     * @var integer
     *
     * @ORM\Column(name="plu_key", type="bigint", nullable=false)
     */
    private $pluKey;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_time", type="datetime", nullable=true)
     */
    private $startTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end_time", type="datetime", nullable=true)
     */
    private $endTime;

    /**
     * @var string
     *
     * @ORM\Column(name="points", type="decimal", precision=6, scale=4, nullable=true)
     */
    private $points;

    /**
     * @var string
     *
     * @ORM\Column(name="conv_factor", type="decimal", precision=6, scale=4, nullable=true)
     */
    private $convFactor;

    /**
     * @var integer
     *
     * @ORM\Column(name="dotz_engine", type="smallint", nullable=true)
     */
    private $dotzEngine;

    /**
     * @var string
     *
     * @ORM\Column(name="provider_code", type="string", length=60, nullable=true)
     */
    private $providerCode;

    /**
     * @var string
     *
     * @ORM\Column(name="provider_cnpj", type="string", length=20, nullable=true)
     */
    private $providerCnpj;

    /**
     * @var string
     *
     * @ORM\Column(name="partner_code", type="string", length=20, nullable=true)
     */
    private $partnerCode;


}

