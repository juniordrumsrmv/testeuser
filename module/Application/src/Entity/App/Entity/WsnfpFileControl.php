<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WsnfpFileControl
 *
 * @ORM\Table(name="wsnfp_file_control", indexes={@ORM\Index(name="index_wsnfp_file_control_md5", columns={"md5"})})
 * @ORM\Entity
 */
class WsnfpFileControl
{
    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=false)
     */
    private $storeKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="ecf_number", type="smallint", nullable=false)
     */
    private $ecfNumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fiscal_date", type="date", nullable=false)
     */
    private $fiscalDate;

    /**
     * @var string
     *
     * @ORM\Column(name="md5", type="string", length=32, nullable=false)
     */
    private $md5;

    /**
     * @var string
     *
     * @ORM\Column(name="file_name", type="string", length=255, nullable=true)
     */
    private $fileName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="export_time", type="datetime", nullable=true)
     */
    private $exportTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="wsnfp_key", type="bigint", nullable=true)
     */
    private $wsnfpKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="trans_key", type="bigint", nullable=true)
     */
    private $transKey;


}

