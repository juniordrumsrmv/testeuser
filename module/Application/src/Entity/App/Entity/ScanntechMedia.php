<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ScanntechMedia
 *
 * @ORM\Table(name="scanntech_media")
 * @ORM\Entity
 */
class ScanntechMedia
{
    /**
     * @var integer
     *
     * @ORM\Column(name="media_key", type="bigint", nullable=false)
     */
    private $mediaKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="media_scan", type="integer", nullable=false)
     */
    private $mediaScan;

    /**
     * @var string
     *
     * @ORM\Column(name="media_scan_name", type="string", length=50, nullable=true)
     */
    private $mediaScanName;

    /**
     * @var string
     *
     * @ORM\Column(name="media_cnc", type="string", length=10, nullable=false)
     */
    private $mediaCnc;

    /**
     * @var string
     *
     * @ORM\Column(name="media_cnc_name", type="string", length=50, nullable=true)
     */
    private $mediaCncName;


}

