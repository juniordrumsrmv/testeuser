<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ScanntechEntity
 *
 * @ORM\Table(name="scanntech_entity")
 * @ORM\Entity
 */
class ScanntechEntity
{
    /**
     * @var integer
     *
     * @ORM\Column(name="entity_key", type="bigint", nullable=false)
     */
    private $entityKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="entity_type_key", type="integer", nullable=false)
     */
    private $entityTypeKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="entity_id", type="integer", nullable=false)
     */
    private $entityId;

    /**
     * @var string
     *
     * @ORM\Column(name="entity_name", type="string", length=50, nullable=true)
     */
    private $entityName;


}

