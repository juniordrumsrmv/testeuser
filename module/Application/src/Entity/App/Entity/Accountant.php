<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Accountant
 *
 * @ORM\Table(name="accountant")
 * @ORM\Entity
 */
class Accountant
{
    /**
     * @var integer
     *
     * @ORM\Column(name="accountant_key", type="bigint", nullable=false)
     */
    private $accountantKey;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=60, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="cnpj_cpf", type="string", length=25, nullable=false)
     */
    private $cnpjCpf;

    /**
     * @var string
     *
     * @ORM\Column(name="crc", type="string", length=30, nullable=false)
     */
    private $crc;

    /**
     * @var string
     *
     * @ORM\Column(name="cep", type="string", length=12, nullable=false)
     */
    private $cep;

    /**
     * @var string
     *
     * @ORM\Column(name="logradouro", type="string", length=50, nullable=false)
     */
    private $logradouro;

    /**
     * @var integer
     *
     * @ORM\Column(name="numero", type="smallint", nullable=false)
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="complemento", type="string", length=20, nullable=false)
     */
    private $complemento;

    /**
     * @var string
     *
     * @ORM\Column(name="bairro", type="string", length=20, nullable=false)
     */
    private $bairro;

    /**
     * @var string
     *
     * @ORM\Column(name="telefone", type="string", length=15, nullable=false)
     */
    private $telefone;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=15, nullable=false)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50, nullable=false)
     */
    private $email;

    /**
     * @var integer
     *
     * @ORM\Column(name="store_city_code", type="integer", nullable=false)
     */
    private $storeCityCode;


}

