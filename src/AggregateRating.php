<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * The average rating based on multiple ratings or reviews.
 */
class AggregateRating extends Rating
{
    /**
     * The item that is being reviewed/rated.
     */
    private $itemReviewed;

    /**
     * The count of total number of ratings.
     */
    private $ratingCount;

    /**
     * The count of total number of reviews.
     */
    private $reviewCount;

    public function getItemReviewed()
    {
        return $this->itemReviewed;
    }

    public function setItemReviewed($itemReviewed)
    {
        $this->itemReviewed = $itemReviewed;
    }

    public function getRatingCount()
    {
        return $this->ratingCount;
    }

    public function setRatingCount($ratingCount)
    {
        $this->ratingCount = $ratingCount;
    }

    public function getReviewCount()
    {
        return $this->reviewCount;
    }

    public function setReviewCount($reviewCount)
    {
        $this->reviewCount = $reviewCount;
    }
}

