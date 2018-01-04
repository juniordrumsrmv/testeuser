<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Wsnfp
 *
 * @ORM\Table(name="wsnfp", indexes={@ORM\Index(name="index_wsnfp", columns={"file_name", "md5"}), @ORM\Index(name="index_wsnfp_1", columns={"store_key", "start_time", "ecf_serial"}), @ORM\Index(name="index_wsnfp_2", columns={"store_key", "ecf_serial", "initial_fiscal_day", "final_fiscal_day"}), @ORM\Index(name="index_wsnfp_3", columns={"wsnfp_status", "check_time"})})
 * @ORM\Entity
 */
class Wsnfp
{
    /**
     * @var integer
     *
     * @ORM\Column(name="wsnfp_key", type="bigint", nullable=false)
     */
    private $wsnfpKey;

    /**
     * @var string
     *
     * @ORM\Column(name="file_name", type="string", length=32, nullable=false)
     */
    private $fileName;

    /**
     * @var string
     *
     * @ORM\Column(name="cnpj", type="string", length=20, nullable=true)
     */
    private $cnpj;

    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=true)
     */
    private $storeKey;

    /**
     * @var string
     *
     * @ORM\Column(name="ecf_serial", type="string", length=30, nullable=true)
     */
    private $ecfSerial;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="initial_fiscal_day", type="date", nullable=true)
     */
    private $initialFiscalDay;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="final_fiscal_day", type="date", nullable=true)
     */
    private $finalFiscalDay;

    /**
     * @var boolean
     *
     * @ORM\Column(name="wsnfp_status", type="boolean", nullable=false)
     */
    private $wsnfpStatus;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_time", type="datetime", nullable=false)
     */
    private $startTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sent_time", type="datetime", nullable=true)
     */
    private $sentTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="result_time", type="datetime", nullable=true)
     */
    private $resultTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="check_time", type="datetime", nullable=true)
     */
    private $checkTime;

    /**
     * @var string
     *
     * @ORM\Column(name="rsl_send_hora", type="string", length=32, nullable=true)
     */
    private $rslSendHora;

    /**
     * @var string
     *
     * @ORM\Column(name="rsl_send_lote", type="string", length=32, nullable=true)
     */
    private $rslSendLote;

    /**
     * @var string
     *
     * @ORM\Column(name="rsl_send_cod_situacao", type="string", length=8, nullable=true)
     */
    private $rslSendCodSituacao;

    /**
     * @var string
     *
     * @ORM\Column(name="rsl_send_situacao", type="string", length=255, nullable=true)
     */
    private $rslSendSituacao;

    /**
     * @var string
     *
     * @ORM\Column(name="rsl_proc_data", type="string", length=32, nullable=true)
     */
    private $rslProcData;

    /**
     * @var string
     *
     * @ORM\Column(name="rsl_proc_data_referencia", type="string", length=32, nullable=true)
     */
    private $rslProcDataReferencia;

    /**
     * @var string
     *
     * @ORM\Column(name="rsl_proc_alertas", type="string", length=255, nullable=true)
     */
    private $rslProcAlertas;

    /**
     * @var string
     *
     * @ORM\Column(name="rsl_proc_quantidade", type="string", length=16, nullable=true)
     */
    private $rslProcQuantidade;

    /**
     * @var string
     *
     * @ORM\Column(name="rsl_proc_razao_social", type="string", length=255, nullable=true)
     */
    private $rslProcRazaoSocial;

    /**
     * @var string
     *
     * @ORM\Column(name="rsl_proc_observacoes", type="string", length=255, nullable=true)
     */
    private $rslProcObservacoes;

    /**
     * @var string
     *
     * @ORM\Column(name="rsl_proc_responsavel", type="string", length=32, nullable=true)
     */
    private $rslProcResponsavel;

    /**
     * @var string
     *
     * @ORM\Column(name="rsl_proc_tipo", type="string", length=64, nullable=true)
     */
    private $rslProcTipo;

    /**
     * @var string
     *
     * @ORM\Column(name="rsl_proc_arquivo", type="string", length=32, nullable=true)
     */
    private $rslProcArquivo;

    /**
     * @var string
     *
     * @ORM\Column(name="rsl_proc_hash", type="string", length=64, nullable=true)
     */
    private $rslProcHash;

    /**
     * @var integer
     *
     * @ORM\Column(name="rsl_proc_tempo", type="integer", nullable=true)
     */
    private $rslProcTempo;

    /**
     * @var integer
     *
     * @ORM\Column(name="rsl_proc_cupons", type="integer", nullable=true)
     */
    private $rslProcCupons;

    /**
     * @var integer
     *
     * @ORM\Column(name="rsl_proc_tamanho", type="bigint", nullable=true)
     */
    private $rslProcTamanho;

    /**
     * @var string
     *
     * @ORM\Column(name="rsl_proc_valor", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $rslProcValor;

    /**
     * @var string
     *
     * @ORM\Column(name="rsl_proc_mensagens", type="text", nullable=true)
     */
    private $rslProcMensagens;

    /**
     * @var string
     *
     * @ORM\Column(name="rsl_proc_cod_situacao", type="string", length=8, nullable=true)
     */
    private $rslProcCodSituacao;

    /**
     * @var string
     *
     * @ORM\Column(name="md5", type="string", length=32, nullable=true)
     */
    private $md5;


}

