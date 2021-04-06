<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * An answer offered to a question; perhaps correct, perhaps opinionated or wrong.
 */
class Answer extends Comment
{
    /**
     * A step-by-step or full explanation about Answer. Can outline how this Answer was
     * achieved or contain more broad clarification or statement about it.
     */
    private $answerExplanation;

    public function getAnswerExplanation()
    {
        return $this->answerExplanation;
    }

    public function setAnswerExplanation($answerExplanation)
    {
        $this->answerExplanation = $answerExplanation;
    }
}

