<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustodiamUser
 *
 * @ORM\Table(name="custodiam_user")
 * @ORM\Entity
 */
class CustodiamUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="custodiam_store", type="bigint", nullable=false)
     */
    private $custodiamStore;

    /**
     * @var string
     *
     * @ORM\Column(name="custodiam_user_email", type="string", length=64, nullable=true)
     */
    private $custodiamUserEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="custodiam_user_password", type="string", length=64, nullable=true)
     */
    private $custodiamUserPassword;

    /**
     * @var integer
     *
     * @ORM\Column(name="custodiam_user_type", type="smallint", nullable=true)
     */
    private $custodiamUserType;

    /**
     * @var integer
     *
     * @ORM\Column(name="custodiam_flag", type="smallint", nullable=true)
     */
    private $custodiamFlag;


}

