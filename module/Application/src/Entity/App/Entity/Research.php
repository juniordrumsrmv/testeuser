<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Research
 *
 * @ORM\Table(name="research", indexes={@ORM\Index(name="index_research_name", columns={"store_key", "research_name"}), @ORM\Index(name="index_research_key", columns={"research_key"})})
 * @ORM\Entity
 */
class Research
{
    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=false)
     */
    private $storeKey;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="research_date", type="date", nullable=false)
     */
    private $researchDate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="research_type", type="boolean", nullable=false)
     */
    private $researchType;

    /**
     * @var integer
     *
     * @ORM\Column(name="research_key", type="bigint", nullable=false)
     */
    private $researchKey;

    /**
     * @var string
     *
     * @ORM\Column(name="research_name", type="string", length=50, nullable=false)
     */
    private $researchName;

    /**
     * @var boolean
     *
     * @ORM\Column(name="research_status", type="boolean", nullable=true)
     */
    private $researchStatus;


}

