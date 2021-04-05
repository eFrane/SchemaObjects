<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A fact-checking review of claims made (or reported) in some creative work
 * (referenced via itemReviewed).
 */
class ClaimReview extends Review
{
    /**
     * A short summary of the specific claims reviewed in a ClaimReview.
     */
    private $claimReviewed;

    public function getClaimReviewed()
    {
        return $this->claimReviewed;
    }

    public function setClaimReviewed($claimReviewed)
    {
        $this->claimReviewed = $claimReviewed;
    }
}

