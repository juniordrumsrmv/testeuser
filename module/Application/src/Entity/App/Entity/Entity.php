<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity
 *
 * @ORM\Table(name="entity", uniqueConstraints={@ORM\UniqueConstraint(name="index_entity_id", columns={"entity_type_key", "entity_id"})})
 * @ORM\Entity
 */
class Entity
{
    /**
     * @var integer
     *
     * @ORM\Column(name="entity_key", type="bigint", nullable=false)
     */
    private $entityKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="entity_type_key", type="integer", nullable=false)
     */
    private $entityTypeKey = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="entity_id", type="string", length=10, nullable=false)
     */
    private $entityId = '';

    /**
     * @var string
     *
     * @ORM\Column(name="entity_name", type="string", length=50, nullable=true)
     */
    private $entityName;

    /**
     * @var string
     *
     * @ORM\Column(name="entity_external_name", type="string", length=255, nullable=true)
     */
    private $entityExternalName;

    /**
     * @var integer
     *
     * @ORM\Column(name="entity_check_interval", type="integer", nullable=true)
     */
    private $entityCheckInterval;

    /**
     * @var integer
     *
     * @ORM\Column(name="entity_notify_interval", type="integer", nullable=true)
     */
    private $entityNotifyInterval;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="entity_last_notify", type="datetime", nullable=true)
     */
    private $entityLastNotify;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="entity_last_check", type="datetime", nullable=true)
     */
    private $entityLastCheck;

    /**
     * @var boolean
     *
     * @ORM\Column(name="entity_send", type="boolean", nullable=true)
     */
    private $entitySend;

    /**
     * @var boolean
     *
     * @ORM\Column(name="entity_popup", type="boolean", nullable=true)
     */
    private $entityPopup;

    /**
     * @var boolean
     *
     * @ORM\Column(name="entity_sms", type="boolean", nullable=true)
     */
    private $entitySms;

    /**
     * @var boolean
     *
     * @ORM\Column(name="entity_cron_option", type="boolean", nullable=true)
     */
    private $entityCronOption;

    /**
     * @var string
     *
     * @ORM\Column(name="entity_cron_spec", type="string", length=255, nullable=true)
     */
    private $entityCronSpec;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="entity_last_execution", type="datetime", nullable=true)
     */
    private $entityLastExecution;


}

