<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PasswordPolicy
 *
 * @ORM\Table(name="password_policy")
 * @ORM\Entity
 */
class PasswordPolicy
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="security_level", type="boolean", nullable=false)
     */
    private $securityLevel;

    /**
     * @var string
     *
     * @ORM\Column(name="security_name", type="string", length=30, nullable=true)
     */
    private $securityName;

    /**
     * @var integer
     *
     * @ORM\Column(name="max_size", type="smallint", nullable=true)
     */
    private $maxSize;

    /**
     * @var integer
     *
     * @ORM\Column(name="min_size", type="smallint", nullable=true)
     */
    private $minSize;

    /**
     * @var integer
     *
     * @ORM\Column(name="period", type="smallint", nullable=true)
     */
    private $period;

    /**
     * @var boolean
     *
     * @ORM\Column(name="pass_not_name", type="boolean", nullable=true)
     */
    private $passNotName;

    /**
     * @var boolean
     *
     * @ORM\Column(name="pass_not_id", type="boolean", nullable=true)
     */
    private $passNotId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="pass_not_seq", type="boolean", nullable=true)
     */
    private $passNotSeq;

    /**
     * @var boolean
     *
     * @ORM\Column(name="pass_not_special", type="boolean", nullable=true)
     */
    private $passNotSpecial;

    /**
     * @var boolean
     *
     * @ORM\Column(name="pass_special", type="boolean", nullable=true)
     */
    private $passSpecial;

    /**
     * @var boolean
     *
     * @ORM\Column(name="pass_numeric", type="boolean", nullable=true)
     */
    private $passNumeric;

    /**
     * @var boolean
     *
     * @ORM\Column(name="pass_letters", type="boolean", nullable=true)
     */
    private $passLetters;

    /**
     * @var boolean
     *
     * @ORM\Column(name="pass_upper_case", type="boolean", nullable=true)
     */
    private $passUpperCase;

    /**
     * @var boolean
     *
     * @ORM\Column(name="open_pass", type="boolean", nullable=true)
     */
    private $openPass;

    /**
     * @var integer
     *
     * @ORM\Column(name="period_warning", type="smallint", nullable=true)
     */
    private $periodWarning = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="option_01", type="boolean", nullable=true)
     */
    private $option01;

    /**
     * @var boolean
     *
     * @ORM\Column(name="option_02", type="boolean", nullable=true)
     */
    private $option02;

    /**
     * @var integer
     *
     * @ORM\Column(name="option_03", type="smallint", nullable=true)
     */
    private $option03;

    /**
     * @var boolean
     *
     * @ORM\Column(name="option_04", type="boolean", nullable=true)
     */
    private $option04;

    /**
     * @var integer
     *
     * @ORM\Column(name="option_05", type="integer", nullable=true)
     */
    private $option05;


}

