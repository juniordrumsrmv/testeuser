<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WsnfpUser
 *
 * @ORM\Table(name="wsnfp_user")
 * @ORM\Entity
 */
class WsnfpUser
{
    /**
     * @var string
     *
     * @ORM\Column(name="cnpj", type="string", length=20, nullable=false)
     */
    private $cnpj;

    /**
     * @var string
     *
     * @ORM\Column(name="user_id", type="string", length=64, nullable=true)
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="user_password", type="string", length=64, nullable=true)
     */
    private $userPassword;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_type", type="smallint", nullable=true)
     */
    private $userType;


}

