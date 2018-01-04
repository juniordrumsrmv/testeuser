<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ScanntechUser
 *
 * @ORM\Table(name="scanntech_user")
 * @ORM\Entity
 */
class ScanntechUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ws_user_key", type="bigint", nullable=false)
     */
    private $wsUserKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="ws_store_id", type="integer", nullable=false)
     */
    private $wsStoreId;

    /**
     * @var integer
     *
     * @ORM\Column(name="ws_user_type", type="integer", nullable=false)
     */
    private $wsUserType = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ws_user_email", type="string", length=64, nullable=false)
     */
    private $wsUserEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="ws_user_password", type="string", length=255, nullable=false)
     */
    private $wsUserPassword;


}

