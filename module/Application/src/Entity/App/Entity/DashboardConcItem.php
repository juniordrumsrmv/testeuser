<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DashboardConcItem
 *
 * @ORM\Table(name="dashboard_conc_item")
 * @ORM\Entity
 */
class DashboardConcItem
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
     * @ORM\Column(name="chave", type="string", length=64, nullable=false)
     */
    private $chave;

    /**
     * @var integer
     *
     * @ORM\Column(name="ncupom", type="bigint", nullable=false)
     */
    private $ncupom;

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
     * @var string
     *
     * @ORM\Column(name="nrec", type="string", length=128, nullable=true)
     */
    private $nrec;

    /**
     * @var string
     *
     * @ORM\Column(name="situacao", type="string", length=256, nullable=true)
     */
    private $situacao;

    /**
     * @var string
     *
     * @ORM\Column(name="cfeerros", type="string", length=256, nullable=true)
     */
    private $cfeerros;

    /**
     * @var integer
     *
     * @ORM\Column(name="conciliare", type="bigint", nullable=true)
     */
    private $conciliare;


}

