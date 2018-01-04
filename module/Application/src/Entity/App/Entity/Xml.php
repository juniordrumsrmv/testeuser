<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Xml
 *
 * @ORM\Table(name="xml")
 * @ORM\Entity
 */
class Xml
{
    /**
     * @var integer
     *
     * @ORM\Column(name="session_key", type="bigint", nullable=false)
     */
    private $sessionKey;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="received_time", type="datetime", nullable=true)
     */
    private $receivedTime;

    /**
     * @var string
     *
     * @ORM\Column(name="file_path", type="string", length=255, nullable=false)
     */
    private $filePath;

    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=false)
     */
    private $storeKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="pos_number", type="smallint", nullable=false)
     */
    private $posNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="xml_data", type="blob", length=65535, nullable=true)
     */
    private $xmlData;


}

