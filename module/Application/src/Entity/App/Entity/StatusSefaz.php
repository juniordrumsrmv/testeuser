<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StatusSefaz
 *
 * @ORM\Table(name="status_sefaz")
 * @ORM\Entity
 */
class StatusSefaz
{
    /**
     * @var integer
     *
     * @ORM\Column(name="status_key", type="smallint", nullable=false)
     */
    private $statusKey;

    /**
     * @var string
     *
     * @ORM\Column(name="status_desc", type="string", length=250, nullable=false)
     */
    private $statusDesc;

    /**
     * @var string
     *
     * @ORM\Column(name="status_faq", type="text", nullable=false)
     */
    private $statusFaq;


}

