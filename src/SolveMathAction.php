<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * The action that takes in a math expression and directs users to a page
 * potentially capable of solving/simplifying that expression.
 */
class SolveMathAction extends Action
{
    /**
     * For questions that are part of learning resources (e.g. Quiz), eduQuestionType
     * indicates the format of question being given. Example: "Multiple choice", "Open
     * ended", "Flashcard".
     */
    private $eduQuestionType;

    public function getEduQuestionType()
    {
        return $this->eduQuestionType;
    }

    public function setEduQuestionType($eduQuestionType)
    {
        $this->eduQuestionType = $eduQuestionType;
    }
}

