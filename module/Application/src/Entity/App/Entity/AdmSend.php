<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AdmSend
 *
 * @ORM\Table(name="adm_send", indexes={@ORM\Index(name="adm_send_index", columns={"table_name", "field"})})
 * @ORM\Entity
 */
class AdmSend
{
    /**
     * @var string
     *
     * @ORM\Column(name="table_name", type="string", length=30, nullable=false)
     */
    private $tableName;

    /**
     * @var string
     *
     * @ORM\Column(name="field", type="string", length=30, nullable=false)
     */
    private $field;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="tag", type="string", length=30, nullable=true)
     */
    private $tag;

    /**
     * @var boolean
     *
     * @ORM\Column(name="flag_online", type="boolean", nullable=true)
     */
    private $flagOnline = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="flag_send", type="boolean", nullable=true)
     */
    private $flagSend = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_change_time", type="datetime", nullable=true)
     */
    private $lastChangeTime;

    /**
     * @var string
     *
     * @ORM\Column(name="module", type="string", length=30, nullable=false)
     */
    private $module;


}

