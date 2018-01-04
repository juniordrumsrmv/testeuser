<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PollQuestion
 *
 * @ORM\Table(name="poll_question")
 * @ORM\Entity
 */
class PollQuestion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="poll_key", type="bigint", nullable=false)
     */
    private $pollKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="question_number", type="smallint", nullable=false)
     */
    private $questionNumber;

    /**
     * @var boolean
     *
     * @ORM\Column(name="question_type", type="boolean", nullable=true)
     */
    private $questionType;

    /**
     * @var string
     *
     * @ORM\Column(name="question_label", type="string", length=255, nullable=true)
     */
    private $questionLabel;

    /**
     * @var string
     *
     * @ORM\Column(name="question_prompt", type="string", length=255, nullable=true)
     */
    private $questionPrompt;


}

