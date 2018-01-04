<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EventMessage
 *
 * @ORM\Table(name="event_message", indexes={@ORM\Index(name="index_event_message_send", columns={"evmsg_send", "evmsg_sent", "agent_key"}), @ORM\Index(name="index_event_message_popup", columns={"agent_key", "evmsg_popup", "evmsg_popedup"})})
 * @ORM\Entity
 */
class EventMessage
{
    /**
     * @var integer
     *
     * @ORM\Column(name="evmsg_key", type="bigint", nullable=false)
     */
    private $evmsgKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="agent_key", type="bigint", nullable=true)
     */
    private $agentKey;

    /**
     * @var string
     *
     * @ORM\Column(name="evctl_id", type="string", length=32, nullable=true)
     */
    private $evctlId;

    /**
     * @var string
     *
     * @ORM\Column(name="evmsg_from", type="string", length=250, nullable=true)
     */
    private $evmsgFrom;

    /**
     * @var string
     *
     * @ORM\Column(name="evmsg_to", type="string", length=250, nullable=true)
     */
    private $evmsgTo;

    /**
     * @var string
     *
     * @ORM\Column(name="evmsg_subject", type="string", length=250, nullable=true)
     */
    private $evmsgSubject;

    /**
     * @var string
     *
     * @ORM\Column(name="evmsg_msg", type="blob", length=65535, nullable=true)
     */
    private $evmsgMsg;

    /**
     * @var string
     *
     * @ORM\Column(name="evmsg_attachment_name", type="string", length=250, nullable=true)
     */
    private $evmsgAttachmentName;

    /**
     * @var string
     *
     * @ORM\Column(name="evmsg_attachment_text", type="blob", length=65535, nullable=true)
     */
    private $evmsgAttachmentText;

    /**
     * @var boolean
     *
     * @ORM\Column(name="evmsg_send", type="boolean", nullable=true)
     */
    private $evmsgSend;

    /**
     * @var boolean
     *
     * @ORM\Column(name="evmsg_popup", type="boolean", nullable=true)
     */
    private $evmsgPopup;

    /**
     * @var boolean
     *
     * @ORM\Column(name="evmsg_sms", type="boolean", nullable=true)
     */
    private $evmsgSms;

    /**
     * @var boolean
     *
     * @ORM\Column(name="evmsg_sent", type="boolean", nullable=true)
     */
    private $evmsgSent;

    /**
     * @var boolean
     *
     * @ORM\Column(name="evmsg_popedup", type="boolean", nullable=true)
     */
    private $evmsgPopedup;

    /**
     * @var boolean
     *
     * @ORM\Column(name="evmsg_sent_sms", type="boolean", nullable=true)
     */
    private $evmsgSentSms;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_time", type="datetime", nullable=true)
     */
    private $startTime;


}

