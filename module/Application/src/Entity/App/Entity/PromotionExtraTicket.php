<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PromotionExtraTicket
 *
 * @ORM\Table(name="promotion_extra_ticket")
 * @ORM\Entity
 */
class PromotionExtraTicket
{
    /**
     * @var integer
     *
     * @ORM\Column(name="extra_ticket_type_key", type="bigint", nullable=false)
     */
    private $extraTicketTypeKey;

    /**
     * @var string
     *
     * @ORM\Column(name="extra_ticket_type_name", type="string", length=50, nullable=true)
     */
    private $extraTicketTypeName;

    /**
     * @var string
     *
     * @ORM\Column(name="extra_ticket_header", type="text", length=65535, nullable=true)
     */
    private $extraTicketHeader;

    /**
     * @var string
     *
     * @ORM\Column(name="extra_ticket_detail", type="text", length=65535, nullable=true)
     */
    private $extraTicketDetail;

    /**
     * @var string
     *
     * @ORM\Column(name="extra_ticket_footer", type="text", length=65535, nullable=true)
     */
    private $extraTicketFooter;


}

