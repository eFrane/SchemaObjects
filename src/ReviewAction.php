<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * The act of producing a balanced opinion about the object for an audience. An
 * agent reviews an object with participants resulting in a review.
 */
class ReviewAction extends AssessAction
{
    /**
     * A sub property of result. The review that resulted in the performing of the
     * action.
     */
    private $resultReview;

    public function getResultReview()
    {
        return $this->resultReview;
    }

    public function setResultReview($resultReview)
    {
        $this->resultReview = $resultReview;
    }
}

