<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ScanntechEntityType
 *
 * @ORM\Table(name="scanntech_entity_type")
 * @ORM\Entity
 */
class ScanntechEntityType
{
    /**
     * @var integer
     *
     * @ORM\Column(name="entity_type_key", type="integer", nullable=false)
     */
    private $entityTypeKey;

    /**
     * @var string
     *
     * @ORM\Column(name="entity_type_name", type="string", length=50, nullable=true)
     */
    private $entityTypeName;


}

