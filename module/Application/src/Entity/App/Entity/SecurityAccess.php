<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SecurityAccess
 *
 * @ORM\Table(name="security_access")
 * @ORM\Entity
 */
class SecurityAccess
{
    /**
     * @var string
     *
     * @ORM\Column(name="key_program", type="string", length=255, nullable=false)
     */
    private $keyProgram;

    /**
     * @var string
     *
     * @ORM\Column(name="data_key", type="string", length=255, nullable=false)
     */
    private $dataKey;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="data_value", type="string", length=255, nullable=false)
     */
    private $dataValue;


}

