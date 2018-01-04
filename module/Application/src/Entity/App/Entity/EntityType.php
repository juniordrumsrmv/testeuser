<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EntityType
 *
 * @ORM\Table(name="entity_type")
 * @ORM\Entity
 */
class EntityType
{
    /**
     * @var integer
     *
     * @ORM\Column(name="entity_type_key", type="integer", nullable=false)
     */
    private $entityTypeKey = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="entity_type_name", type="string", length=50, nullable=true)
     */
    private $entityTypeName;


}

