<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A review of an item - for example, of a restaurant, movie, or store.
 */
class Review extends CreativeWork
{
    /**
     * The rating given in this review. Note that reviews can themselves be rated. The
     * ```reviewRating``` applies to rating given by the review. The
     * [[aggregateRating]] property applies to the review itself, as a creative work.
     */
    private $reviewRating;

    /**
     * The actual body of the review.
     */
    private $reviewBody;

    /**
     * This Review or Rating is relevant to this part or facet of the itemReviewed.
     */
    private $reviewAspect;

    public function getReviewRating()
    {
        return $this->reviewRating;
    }

    public function setReviewRating($reviewRating)
    {
        $this->reviewRating = $reviewRating;
    }

    public function getReviewBody()
    {
        return $this->reviewBody;
    }

    public function setReviewBody($reviewBody)
    {
        $this->reviewBody = $reviewBody;
    }

    public function getReviewAspect()
    {
        return $this->reviewAspect;
    }

    public function setReviewAspect($reviewAspect)
    {
        $this->reviewAspect = $reviewAspect;
    }
}

