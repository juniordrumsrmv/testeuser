<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WsnfpMensagens
 *
 * @ORM\Table(name="wsnfp_mensagens")
 * @ORM\Entity
 */
class WsnfpMensagens
{
    /**
     * @var string
     *
     * @ORM\Column(name="rsl_key", type="string", length=20, nullable=false)
     */
    private $rslKey;

    /**
     * @var string
     *
     * @ORM\Column(name="store_state", type="string", length=20, nullable=false)
     */
    private $storeState;

    /**
     * @var string
     *
     * @ORM\Column(name="rsl_proc_mensagens", type="text", nullable=true)
     */
    private $rslProcMensagens;

    /**
     * @var integer
     *
     * @ORM\Column(name="rsl_action", type="bigint", nullable=false)
     */
    private $rslAction;


}

