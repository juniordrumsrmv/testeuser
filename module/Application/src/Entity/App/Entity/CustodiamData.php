<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustodiamData
 *
 * @ORM\Table(name="custodiam_data")
 * @ORM\Entity
 */
class CustodiamData
{
    /**
     * @var integer
     *
     * @ORM\Column(name="custodiam_service_type", type="smallint", nullable=false)
     */
    private $custodiamServiceType;

    /**
     * @var integer
     *
     * @ORM\Column(name="custodiam_action_type", type="smallint", nullable=false)
     */
    private $custodiamActionType;

    /**
     * @var integer
     *
     * @ORM\Column(name="custodiam_partner", type="smallint", nullable=false)
     */
    private $custodiamPartner;

    /**
     * @var string
     *
     * @ORM\Column(name="custodiam_url", type="string", length=255, nullable=true)
     */
    private $custodiamUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="custodiam_name_space", type="string", length=255, nullable=true)
     */
    private $custodiamNameSpace;

    /**
     * @var string
     *
     * @ORM\Column(name="custodiam_ws_submit_format", type="text", length=65535, nullable=true)
     */
    private $custodiamWsSubmitFormat;

    /**
     * @var string
     *
     * @ORM\Column(name="custodiam_ws_query_format", type="text", length=65535, nullable=true)
     */
    private $custodiamWsQueryFormat;


}

