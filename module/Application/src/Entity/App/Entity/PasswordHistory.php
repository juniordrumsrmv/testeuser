<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PasswordHistory
 *
 * @ORM\Table(name="password_history")
 * @ORM\Entity
 */
class PasswordHistory
{
    /**
     * @var integer
     *
     * @ORM\Column(name="agent_key", type="bigint", nullable=false)
     */
    private $agentKey;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_change_time", type="datetime", nullable=false)
     */
    private $lastChangeTime;

    /**
     * @var string
     *
     * @ORM\Column(name="cript_password", type="string", length=50, nullable=true)
     */
    private $criptPassword;


}

