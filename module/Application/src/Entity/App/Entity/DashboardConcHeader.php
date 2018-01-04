<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DashboardConcHeader
 *
 * @ORM\Table(name="dashboard_conc_header")
 * @ORM\Entity
 */
class DashboardConcHeader
{
    /**
     * @var integer
     *
     * @ORM\Column(name="nseriesat", type="bigint", nullable=false)
     */
    private $nseriesat;

    /**
     * @var string
     *
     * @ORM\Column(name="nrec", type="string", length=128, nullable=false)
     */
    private $nrec;

    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=false)
     */
    private $storeKey;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fiscal_date", type="date", nullable=false)
     */
    private $fiscalDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dhenviolote", type="datetime", nullable=true)
     */
    private $dhenviolote;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dhprocessamento", type="datetime", nullable=true)
     */
    private $dhprocessamento;

    /**
     * @var string
     *
     * @ORM\Column(name="tipoLote", type="string", length=32, nullable=true)
     */
    private $tipolote;

    /**
     * @var string
     *
     * @ORM\Column(name="origem", type="string", length=256, nullable=true)
     */
    private $origem;

    /**
     * @var integer
     *
     * @ORM\Column(name="qtdecupoms", type="bigint", nullable=true)
     */
    private $qtdecupoms;

    /**
     * @var string
     *
     * @ORM\Column(name="situacaolote", type="string", length=64, nullable=true)
     */
    private $situacaolote;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_sent_time", type="datetime", nullable=true)
     */
    private $lastSentTime;


}

