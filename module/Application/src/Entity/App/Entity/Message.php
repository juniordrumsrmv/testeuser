<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Message
 *
 * @ORM\Table(name="message")
 * @ORM\Entity
 */
class Message
{
    /**
     * @var string
     *
     * @ORM\Column(name="message_key", type="string", length=12, nullable=false)
     */
    private $messageKey;

    /**
     * @var string
     *
     * @ORM\Column(name="message_lang", type="string", length=2, nullable=false)
     */
    private $messageLang;

    /**
     * @var string
     *
     * @ORM\Column(name="message_subject", type="string", length=250, nullable=true)
     */
    private $messageSubject;

    /**
     * @var string
     *
     * @ORM\Column(name="message_text", type="blob", length=65535, nullable=true)
     */
    private $messageText;


}

