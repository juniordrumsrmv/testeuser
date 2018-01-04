<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user", uniqueConstraints={@ORM\UniqueConstraint(name="index_user_alternate_id", columns={"alternate_id"})}, indexes={@ORM\Index(name="index_matr", columns={"matriculation"})})
 * @ORM\Entity
 */
class User
{
    /**
     * @var integer
     *
     * @ORM\Column(name="agent_key", type="bigint", nullable=false)
     */
    private $agentKey = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="alternate_id", type="string", length=10, nullable=true)
     */
    private $alternateId;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=50, nullable=true)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=2, nullable=true)
     */
    private $language;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="clerk_percent", type="decimal", precision=4, scale=2, nullable=true)
     */
    private $clerkPercent;

    /**
     * @var integer
     *
     * @ORM\Column(name="pos_load_last_store_key", type="bigint", nullable=true)
     */
    private $posLoadLastStoreKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="pos_load_last_pos_number", type="smallint", nullable=true)
     */
    private $posLoadLastPosNumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pos_load_last_time", type="datetime", nullable=true)
     */
    private $posLoadLastTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="pos_save_last_store_key", type="bigint", nullable=true)
     */
    private $posSaveLastStoreKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="pos_save_last_pos_number", type="smallint", nullable=true)
     */
    private $posSaveLastPosNumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pos_save_last_time", type="datetime", nullable=true)
     */
    private $posSaveLastTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=false)
     */
    private $storeKey = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="usr_mode", type="string", length=12, nullable=true)
     */
    private $usrMode;

    /**
     * @var string
     *
     * @ORM\Column(name="treatment", type="string", length=64, nullable=true)
     */
    private $treatment;

    /**
     * @var string
     *
     * @ORM\Column(name="sms", type="string", length=20, nullable=true)
     */
    private $sms;

    /**
     * @var string
     *
     * @ORM\Column(name="user_ident", type="string", length=25, nullable=true)
     */
    private $userIdent;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="user_birthday", type="date", nullable=true)
     */
    private $userBirthday;

    /**
     * @var boolean
     *
     * @ORM\Column(name="user_status", type="boolean", nullable=false)
     */
    private $userStatus = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="cript_password", type="string", length=50, nullable=true)
     */
    private $criptPassword;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="expiration_date", type="date", nullable=true)
     */
    private $expirationDate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="security_level", type="boolean", nullable=true)
     */
    private $securityLevel;

    /**
     * @var string
     *
     * @ORM\Column(name="biometrics", type="blob", length=65535, nullable=true)
     */
    private $biometrics;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_change_time", type="datetime", nullable=true)
     */
    private $lastChangeTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="user_date_inc", type="date", nullable=true)
     */
    private $userDateInc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="user_date_alt_status", type="date", nullable=true)
     */
    private $userDateAltStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="matriculation", type="string", length=32, nullable=true)
     */
    private $matriculation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="user_date_inactive_status", type="date", nullable=true)
     */
    private $userDateInactiveStatus;

    /**
     * @var boolean
     *
     * @ORM\Column(name="user_trace", type="boolean", nullable=true)
     */
    private $userTrace;

    /**
     * @var string
     *
     * @ORM\Column(name="user_trace_file", type="string", length=255, nullable=true)
     */
    private $userTraceFile;

    /**
     * @var string
     *
     * @ORM\Column(name="user_db_user", type="string", length=255, nullable=true)
     */
    private $userDbUser;

    /**
     * @var string
     *
     * @ORM\Column(name="user_db_pass", type="string", length=255, nullable=true)
     */
    private $userDbPass;

    /**
     * @var boolean
     *
     * @ORM\Column(name="user_color_set", type="boolean", nullable=true)
     */
    private $userColorSet;

    /**
     * @var string
     *
     * @ORM\Column(name="user_bgcolor1", type="string", length=16, nullable=true)
     */
    private $userBgcolor1;

    /**
     * @var string
     *
     * @ORM\Column(name="user_bgcolor2", type="string", length=16, nullable=true)
     */
    private $userBgcolor2;

    /**
     * @var string
     *
     * @ORM\Column(name="user_bgcolor3", type="string", length=16, nullable=true)
     */
    private $userBgcolor3;

    /**
     * @var string
     *
     * @ORM\Column(name="user_bgcolor4", type="string", length=16, nullable=true)
     */
    private $userBgcolor4;

    /**
     * @var string
     *
     * @ORM\Column(name="user_bgcolor5", type="string", length=16, nullable=true)
     */
    private $userBgcolor5;

    /**
     * @var string
     *
     * @ORM\Column(name="user_bgcolor6", type="string", length=16, nullable=true)
     */
    private $userBgcolor6;

    /**
     * @var string
     *
     * @ORM\Column(name="user_txcolor1", type="string", length=16, nullable=true)
     */
    private $userTxcolor1;

    /**
     * @var string
     *
     * @ORM\Column(name="user_txcolor2", type="string", length=16, nullable=true)
     */
    private $userTxcolor2;

    /**
     * @var boolean
     *
     * @ORM\Column(name="user_tr_hover", type="boolean", nullable=true)
     */
    private $userTrHover;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_lines_per_screen", type="smallint", nullable=true)
     */
    private $userLinesPerScreen;

    /**
     * @var boolean
     *
     * @ORM\Column(name="user_menu_layout", type="boolean", nullable=true)
     */
    private $userMenuLayout;

    /**
     * @var boolean
     *
     * @ORM\Column(name="user_theme_option", type="boolean", nullable=true)
     */
    private $userThemeOption;

    /**
     * @var string
     *
     * @ORM\Column(name="user_theme", type="string", length=255, nullable=true)
     */
    private $userTheme;

    /**
     * @var boolean
     *
     * @ORM\Column(name="user_enable_config_options", type="boolean", nullable=true)
     */
    private $userEnableConfigOptions;

    /**
     * @var boolean
     *
     * @ORM\Column(name="count_error", type="boolean", nullable=true)
     */
    private $countError;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="block_date", type="datetime", nullable=true)
     */
    private $blockDate;


}

