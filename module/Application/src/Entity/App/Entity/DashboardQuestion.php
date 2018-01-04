<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DashboardQuestion
 *
 * @ORM\Table(name="dashboard_question")
 * @ORM\Entity
 */
class DashboardQuestion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="question_key", type="bigint", nullable=false)
     */
    private $questionKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="question_type", type="bigint", nullable=false)
     */
    private $questionType;

    /**
     * @var string
     *
     * @ORM\Column(name="question_id", type="string", length=24, nullable=false)
     */
    private $questionId;

    /**
     * @var string
     *
     * @ORM\Column(name="question_value", type="text", length=65535, nullable=true)
     */
    private $questionValue;

    /**
     * @var string
     *
     * @ORM\Column(name="question_action", type="string", length=24, nullable=false)
     */
    private $questionAction;


}

