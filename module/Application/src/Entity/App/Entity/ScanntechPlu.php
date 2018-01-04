<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ScanntechPlu
 *
 * @ORM\Table(name="scanntech_plu")
 * @ORM\Entity
 */
class ScanntechPlu
{
    /**
     * @var integer
     *
     * @ORM\Column(name="scanntech_key", type="smallint", nullable=false)
     */
    private $scanntechKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=true)
     */
    private $storeKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="ws_id_empresa", type="bigint", nullable=false)
     */
    private $wsIdEmpresa;

    /**
     * @var integer
     *
     * @ORM\Column(name="ws_codio_local", type="bigint", nullable=false)
     */
    private $wsCodioLocal;

    /**
     * @var integer
     *
     * @ORM\Column(name="plu_key", type="bigint", nullable=true)
     */
    private $pluKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="short_description", type="string", length=48, nullable=true)
     */
    private $shortDescription;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_price", type="datetime", nullable=false)
     */
    private $startPrice;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_time", type="datetime", nullable=true)
     */
    private $lastTime;


}

