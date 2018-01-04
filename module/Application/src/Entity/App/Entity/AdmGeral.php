<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AdmGeral
 *
 * @ORM\Table(name="adm_geral", indexes={@ORM\Index(name="index_adm_geral_01", columns={"cnpj_loja", "cod_solicitacao"}), @ORM\Index(name="index_adm_geral_02", columns={"num_adm", "store_key"})})
 * @ORM\Entity
 */
class AdmGeral
{
    /**
     * @var integer
     *
     * @ORM\Column(name="transaction", type="integer", nullable=false)
     */
    private $transaction;

    /**
     * @var string
     *
     * @ORM\Column(name="cnpj_loja", type="string", length=17, nullable=false)
     */
    private $cnpjLoja;

    /**
     * @var integer
     *
     * @ORM\Column(name="cod_solicitacao", type="integer", nullable=false)
     */
    private $codSolicitacao;

    /**
     * @var string
     *
     * @ORM\Column(name="num_adm", type="string", length=30, nullable=true)
     */
    private $numAdm;

    /**
     * @var string
     *
     * @ORM\Column(name="crm", type="string", length=17, nullable=true)
     */
    private $crm;

    /**
     * @var string
     *
     * @ORM\Column(name="cpf", type="string", length=17, nullable=true)
     */
    private $cpf;

    /**
     * @var integer
     *
     * @ORM\Column(name="ticket_number", type="integer", nullable=true)
     */
    private $ticketNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="uni_federal", type="string", length=2, nullable=true)
     */
    private $uniFederal;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_prescricao", type="date", nullable=true)
     */
    private $dataPrescricao;

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

    /**
     * @var integer
     *
     * @ORM\Column(name="status_emporium", type="integer", nullable=true)
     */
    private $statusEmporium;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_time", type="datetime", nullable=true)
     */
    private $startTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="pos_number", type="smallint", nullable=true)
     */
    private $posNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="integer", nullable=false)
     */
    private $storeKey;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=60, nullable=true)
     */
    private $nome;

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


}

