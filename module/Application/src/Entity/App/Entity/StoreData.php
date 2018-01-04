<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StoreData
 *
 * @ORM\Table(name="store_data")
 * @ORM\Entity
 */
class StoreData
{
    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=false)
     */
    private $storeKey;

    /**
     * @var string
     *
     * @ORM\Column(name="data_id", type="string", length=16, nullable=false)
     */
    private $dataId;

    /**
     * @var string
     *
     * @ORM\Column(name="data_name", type="string", length=30, nullable=false)
     */
    private $dataName;

    /**
     * @var string
     *
     * @ORM\Column(name="data_value", type="text", length=65535, nullable=true)
     */
    private $dataValue;

    /**
     * @var integer
     *
     * @ORM\Column(name="data_type", type="smallint", nullable=true)
     */
    private $dataType = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="data_hidden", type="smallint", nullable=true)
     */
    private $dataHidden = '0';


}

