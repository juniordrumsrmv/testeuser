<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccessType
 *
 * @ORM\Table(name="access_type")
 * @ORM\Entity
 */
class AccessType
{
    /**
     * @var integer
     *
     * @ORM\Column(name="access_type_key", type="integer", nullable=false)
     */
    private $accessTypeKey = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="access_type_name", type="string", length=50, nullable=true)
     */
    private $accessTypeName;


}

