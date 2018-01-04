<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SerasaType
 *
 * @ORM\Table(name="serasa_type")
 * @ORM\Entity
 */
class SerasaType
{
    /**
     * @var integer
     *
     * @ORM\Column(name="serasa_type_key", type="smallint", nullable=false)
     */
    private $serasaTypeKey;

    /**
     * @var string
     *
     * @ORM\Column(name="serasa_type_name", type="string", length=20, nullable=true)
     */
    private $serasaTypeName;

    /**
     * @var string
     *
     * @ORM\Column(name="serasa_type_msg", type="string", length=60, nullable=true)
     */
    private $serasaTypeMsg;


}

