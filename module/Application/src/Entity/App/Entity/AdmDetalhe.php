<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AdmDetalhe
 *
 * @ORM\Table(name="adm_detalhe")
 * @ORM\Entity
 */
class AdmDetalhe
{
    /**
     * @var string
     *
     * @ORM\Column(name="num_adm", type="string", length=30, nullable=false)
     */
    private $numAdm;

    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="integer", nullable=false)
     */
    private $storeKey;

    /**
     * @var string
     *
     * @ORM\Column(name="sku_id", type="string", length=14, nullable=false)
     */
    private $skuId;

    /**
     * @var integer
     *
     * @ORM\Column(name="pos_number", type="smallint", nullable=true)
     */
    private $posNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="ticket_number", type="integer", nullable=true)
     */
    private $ticketNumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_time", type="datetime", nullable=true)
     */
    private $startTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fiscal_date", type="date", nullable=true)
     */
    private $fiscalDate;

    /**
     * @var string
     *
     * @ORM\Column(name="qty_autorizada", type="decimal", precision=9, scale=3, nullable=true)
     */
    private $qtyAutorizada;

    /**
     * @var string
     *
     * @ORM\Column(name="qty_estornada", type="decimal", precision=9, scale=3, nullable=true)
     */
    private $qtyEstornada;

    /**
     * @var string
     *
     * @ORM\Column(name="unidade_apresentacao", type="string", length=10, nullable=true)
     */
    private $unidadeApresentacao;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_total", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $valorTotal;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_ms", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $valorMs;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_paciente", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $valorPaciente;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_estorno", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $valorEstorno;

    /**
     * @var integer
     *
     * @ORM\Column(name="cod_indicador", type="integer", nullable=true)
     */
    private $codIndicador;

    /**
     * @var integer
     *
     * @ORM\Column(name="cod_indicador_estorno", type="integer", nullable=true)
     */
    private $codIndicadorEstorno;


}

