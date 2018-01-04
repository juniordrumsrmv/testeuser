<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notification
 *
 * @ORM\Table(name="notification", indexes={@ORM\Index(name="index_notification", columns={"store_key", "pos_number", "notification_time"})})
 * @ORM\Entity
 */
class Notification
{
    /**
     * @var integer
     *
     * @ORM\Column(name="notification_key", type="bigint", nullable=false)
     */
    private $notificationKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=true)
     */
    private $storeKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="pos_number", type="smallint", nullable=true)
     */
    private $posNumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="notification_time", type="datetime", nullable=true)
     */
    private $notificationTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="notification_type", type="smallint", nullable=true)
     */
    private $notificationType;

    /**
     * @var integer
     *
     * @ORM\Column(name="transaction_type", type="smallint", nullable=true)
     */
    private $transactionType;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="smallint", nullable=true)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="units", type="bigint", nullable=true)
     */
    private $units;

    /**
     * @var string
     *
     * @ORM\Column(name="process_id", type="string", length=255, nullable=true)
     */
    private $processId;

    /**
     * @var integer
     *
     * @ORM\Column(name="ticket_number", type="integer", nullable=true)
     */
    private $ticketNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="trn_number", type="integer", nullable=true)
     */
    private $trnNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="cashier_key", type="bigint", nullable=true)
     */
    private $cashierKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="authorizer_key", type="bigint", nullable=true)
     */
    private $authorizerKey;

    /**
     * @var string
     *
     * @ORM\Column(name="notification_data", type="blob", length=65535, nullable=true)
     */
    private $notificationData;


}

