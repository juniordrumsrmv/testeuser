<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DotzFile
 *
 * @ORM\Table(name="dotz_file")
 * @ORM\Entity
 */
class DotzFile
{
    /**
     * @var integer
     *
     * @ORM\Column(name="file_key", type="bigint", nullable=false)
     */
    private $fileKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=false)
     */
    private $storeKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="plu_key_list_id", type="bigint", nullable=false)
     */
    private $pluKeyListId;

    /**
     * @var string
     *
     * @ORM\Column(name="plu_list_description", type="string", length=60, nullable=true)
     */
    private $pluListDescription;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_change_time", type="datetime", nullable=true)
     */
    private $lastChangeTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="file_type", type="smallint", nullable=true)
     */
    private $fileType;


}

