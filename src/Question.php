<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A specific question - e.g. from a user seeking answers online, or collected in a
 * Frequently Asked Questions (FAQ) document.
 */
class Question extends Comment
{
    /**
     * The answer(s) that has been accepted as best, typically on a Question/Answer
     * site. Sites vary in their selection mechanisms, e.g. drawing on community
     * opinion and/or the view of the Question author.
     */
    private $acceptedAnswer;

    /**
     * An answer (possibly one of several, possibly incorrect) to a Question, e.g. on a
     * Question/Answer site.
     */
    private $suggestedAnswer;

    /**
     * The number of answers this question has received.
     */
    private $answerCount;

    public function getAcceptedAnswer()
    {
        return $this->acceptedAnswer;
    }

    public function setAcceptedAnswer($acceptedAnswer)
    {
        $this->acceptedAnswer = $acceptedAnswer;
    }

    public function getSuggestedAnswer()
    {
        return $this->suggestedAnswer;
    }

    public function setSuggestedAnswer($suggestedAnswer)
    {
        $this->suggestedAnswer = $suggestedAnswer;
    }

    public function getAnswerCount()
    {
        return $this->answerCount;
    }

    public function setAnswerCount($answerCount)
    {
        $this->answerCount = $answerCount;
    }
}

