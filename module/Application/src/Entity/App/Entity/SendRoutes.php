<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SendRoutes
 *
 * @ORM\Table(name="send_routes", uniqueConstraints={@ORM\UniqueConstraint(name="index_send_routes", columns={"type_oper", "model_type", "store_key"})})
 * @ORM\Entity
 */
class SendRoutes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="type_oper", type="smallint", nullable=true)
     */
    private $typeOper;

    /**
     * @var integer
     *
     * @ORM\Column(name="model_type", type="smallint", nullable=true)
     */
    private $modelType;

    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=true)
     */
    private $storeKey;

    /**
     * @var string
     *
     * @ORM\Column(name="file_path", type="string", length=255, nullable=true)
     */
    private $filePath;

    /**
     * @var string
     *
     * @ORM\Column(name="file_name", type="string", length=255, nullable=true)
     */
    private $fileName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_change_time", type="datetime", nullable=true)
     */
    private $lastChangeTime;


}

