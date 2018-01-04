<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ScanntechStore
 *
 * @ORM\Table(name="scanntech_store")
 * @ORM\Entity
 */
class ScanntechStore
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ws_store_key", type="bigint", nullable=false)
     */
    private $wsStoreKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="ws_store_id", type="integer", nullable=true)
     */
    private $wsStoreId;

    /**
     * @var integer
     *
     * @ORM\Column(name="ws_locale_id", type="integer", nullable=true)
     */
    private $wsLocaleId;

    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="smallint", nullable=true)
     */
    private $storeKey;

    /**
     * @var string
     *
     * @ORM\Column(name="cnpj", type="string", length=40, nullable=true)
     */
    private $cnpj;


}

