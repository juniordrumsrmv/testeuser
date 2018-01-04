<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CompetitorResearch
 *
 * @ORM\Table(name="competitor_research", indexes={@ORM\Index(name="index_research_key", columns={"research_key"}), @ORM\Index(name="index_research_competitor", columns={"store_key", "compet_key", "plu_key", "research_date", "research_key"})})
 * @ORM\Entity
 */
class CompetitorResearch
{
    /**
     * @var integer
     *
     * @ORM\Column(name="research_key", type="bigint", nullable=false)
     */
    private $researchKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=false)
     */
    private $storeKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="compet_key", type="bigint", nullable=false)
     */
    private $competKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="plu_key", type="bigint", nullable=false)
     */
    private $pluKey;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $price;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="research_date", type="date", nullable=false)
     */
    private $researchDate;


}

