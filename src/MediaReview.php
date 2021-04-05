<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A [[MediaReview]] is a more specialized form of Review dedicated to the
 * evaluation of media content online, typically in the context of fact-checking
 * and misinformation.
 *     For more general reviews of media in the broader sense, use [[UserReview]],
 * [[CriticReview]] or other [[Review]] types. This definition is
 *     a work in progress. While the [[MediaManipulationRatingEnumeration]] list
 * reflects significant community review amongst fact-checkers and others working
 *     to combat misinformation, the specific structures for representing media
 * objects, their versions and publication context, is still evolving. Similarly,
 * best practices for the relationship between [[MediaReview]] and [[ClaimReview]]
 * markup has not yet been finalized.
 */
class MediaReview extends Review
{
    /**
     * Indicates a MediaManipulationRatingEnumeration classification of a media object
     * (in the context of how it was published or shared).
     */
    private $mediaAuthenticityCategory;

    public function getMediaAuthenticityCategory()
    {
        return $this->mediaAuthenticityCategory;
    }

    public function setMediaAuthenticityCategory($mediaAuthenticityCategory)
    {
        $this->mediaAuthenticityCategory = $mediaAuthenticityCategory;
    }
}

