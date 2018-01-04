<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ScanntechUrl
 *
 * @ORM\Table(name="scanntech_url")
 * @ORM\Entity
 */
class ScanntechUrl
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ws_url_key", type="bigint", nullable=false)
     */
    private $wsUrlKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="ws_store_id", type="smallint", nullable=false)
     */
    private $wsStoreId;

    /**
     * @var integer
     *
     * @ORM\Column(name="ws_url_type", type="smallint", nullable=false)
     */
    private $wsUrlType = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ws_url_descripton", type="string", length=255, nullable=true)
     */
    private $wsUrlDescripton;

    /**
     * @var string
     *
     * @ORM\Column(name="ws_url_url", type="string", length=255, nullable=true)
     */
    private $wsUrlUrl;


}

