<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomerAnswer
 *
 * @ORM\Table(name="customer_answer", indexes={@ORM\Index(name="index_customer_answer_ticket", columns={"store_key", "pos_number", "ticket_number", "start_time", "poll_type", "poll_key", "question_number"}), @ORM\Index(name="index_customer_answer_poll", columns={"poll_type", "poll_key", "question_number"}), @ORM\Index(name="index_customer_answer_customer", columns={"customer_key", "poll_type", "poll_key"})})
 * @ORM\Entity
 */
class CustomerAnswer
{
    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=false)
     */
    private $storeKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="pos_number", type="smallint", nullable=false)
     */
    private $posNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="ticket_number", type="integer", nullable=false)
     */
    private $ticketNumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_time", type="datetime", nullable=false)
     */
    private $startTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="poll_key", type="bigint", nullable=false)
     */
    private $pollKey;

    /**
     * @var boolean
     *
     * @ORM\Column(name="poll_type", type="boolean", nullable=true)
     */
    private $pollType;

    /**
     * @var integer
     *
     * @ORM\Column(name="question_number", type="smallint", nullable=true)
     */
    private $questionNumber;

    /**
     * @var boolean
     *
     * @ORM\Column(name="question_type", type="boolean", nullable=true)
     */
    private $questionType;

    /**
     * @var integer
     *
     * @ORM\Column(name="answer_number", type="smallint", nullable=true)
     */
    private $answerNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="answer_text", type="string", length=255, nullable=true)
     */
    private $answerText;

    /**
     * @var integer
     *
     * @ORM\Column(name="customer_key", type="bigint", nullable=true)
     */
    private $customerKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="cst_type_key", type="smallint", nullable=true)
     */
    private $cstTypeKey;


}

