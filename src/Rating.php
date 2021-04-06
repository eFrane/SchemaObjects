<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A rating is an evaluation on a numeric scale, such as 1 to 5 stars.
 */
class Rating extends Intangible
{
    /**
     * The highest value allowed in this rating system. If bestRating is omitted, 5 is
     * assumed.
     */
    private $bestRating;

    /**
     * The lowest value allowed in this rating system. If worstRating is omitted, 1 is
     * assumed.
     */
    private $worstRating;

    /**
     * A short explanation (e.g. one to two sentences) providing background context and
     * other information that led to the conclusion expressed in the rating. This is
     * particularly applicable to ratings associated with "fact check" markup using
     * [[ClaimReview]].
     */
    private $ratingExplanation;

    /**
     * The rating for the content.
     *
     * Usage guidelines:
     *
     * * Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE'
     * (U+0039)) rather than superficially similiar Unicode symbols.
     * * Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal
     * point. Avoid using these symbols as a readability separator.
     */
    private $ratingValue;

    public function getBestRating()
    {
        return $this->bestRating;
    }

    public function setBestRating($bestRating)
    {
        $this->bestRating = $bestRating;
    }

    public function getWorstRating()
    {
        return $this->worstRating;
    }

    public function setWorstRating($worstRating)
    {
        $this->worstRating = $worstRating;
    }

    public function getRatingExplanation()
    {
        return $this->ratingExplanation;
    }

    public function setRatingExplanation($ratingExplanation)
    {
        $this->ratingExplanation = $ratingExplanation;
    }

    public function getRatingValue()
    {
        return $this->ratingValue;
    }

    public function setRatingValue($ratingValue)
    {
        $this->ratingValue = $ratingValue;
    }
}

