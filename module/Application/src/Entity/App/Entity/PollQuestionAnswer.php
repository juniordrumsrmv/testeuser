<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PollQuestionAnswer
 *
 * @ORM\Table(name="poll_question_answer")
 * @ORM\Entity
 */
class PollQuestionAnswer
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
     * @var integer
     *
     * @ORM\Column(name="answer_number", type="smallint", nullable=false)
     */
    private $answerNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="answer_text", type="string", length=255, nullable=true)
     */
    private $answerText;


}

