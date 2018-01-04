<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FiscalState
 *
 * @ORM\Table(name="fiscal_state")
 * @ORM\Entity
 */
class FiscalState
{
    /**
     * @var string
     *
     * @ORM\Column(name="fiscal_state_acronym", type="string", length=4, nullable=false)
     */
    private $fiscalStateAcronym;

    /**
     * @var integer
     *
     * @ORM\Column(name="fiscal_state_type", type="smallint", nullable=false)
     */
    private $fiscalStateType;

    /**
     * @var string
     *
     * @ORM\Column(name="fiscal_state_url", type="string", length=255, nullable=true)
     */
    private $fiscalStateUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="fiscal_state_name_space", type="string", length=255, nullable=true)
     */
    private $fiscalStateNameSpace;

    /**
     * @var string
     *
     * @ORM\Column(name="fiscal_state_ws_submit_format", type="text", length=65535, nullable=true)
     */
    private $fiscalStateWsSubmitFormat;

    /**
     * @var string
     *
     * @ORM\Column(name="fiscal_state_ws_query_format", type="text", length=65535, nullable=true)
     */
    private $fiscalStateWsQueryFormat;

    /**
     * @var string
     *
     * @ORM\Column(name="fiscal_state_ws_submit_header", type="text", length=65535, nullable=true)
     */
    private $fiscalStateWsSubmitHeader;

    /**
     * @var string
     *
     * @ORM\Column(name="fiscal_state_ws_query_header", type="text", length=65535, nullable=true)
     */
    private $fiscalStateWsQueryHeader;


}

