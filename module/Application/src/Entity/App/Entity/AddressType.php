<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AddressType
 *
 * @ORM\Table(name="address_type")
 * @ORM\Entity
 */
class AddressType
{
    /**
     * @var integer
     *
     * @ORM\Column(name="address_type_key", type="smallint", nullable=false)
     */
    private $addressTypeKey;

    /**
     * @var string
     *
     * @ORM\Column(name="address_type_name", type="string", length=20, nullable=true)
     */
    private $addressTypeName;

    /**
     * @var boolean
     *
     * @ORM\Column(name="address_type_send", type="boolean", nullable=true)
     */
    private $addressTypeSend;


}

