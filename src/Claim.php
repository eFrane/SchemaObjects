<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A [[Claim]] in Schema.org represents a specific, factually-oriented claim that
 * could be the [[itemReviewed]] in a [[ClaimReview]]. The content of a claim can
 * be summarized with the [[text]] property. Variations on well known claims can
 * have their common identity indicated via [[sameAs]] links, and summarized with a
 * [[name]]. Ideally, a [[Claim]] description includes enough contextual
 * information to minimize the risk of ambiguity or inclarity. In practice, many
 * claims are better understood in the context in which they appear or the
 * interpretations provided by claim reviews.
 *
 *   Beyond [[ClaimReview]], the Claim type can be associated with related creative
 * works - for example a [[ScholarlyArticle]] or [[Question]] might be [[about]]
 * some [[Claim]].
 *
 *   At this time, Schema.org does not define any types of relationship between
 * claims. This is a natural area for future exploration.
 */
class Claim extends CreativeWork
{
    /**
     * Indicates the first known occurence of a [[Claim]] in some [[CreativeWork]].
     */
    private $firstAppearance;

    /**
     * Indicates an occurence of a [[Claim]] in some [[CreativeWork]].
     */
    private $appearance;

    public function getFirstAppearance()
    {
        return $this->firstAppearance;
    }

    public function setFirstAppearance($firstAppearance)
    {
        $this->firstAppearance = $firstAppearance;
    }

    public function getAppearance()
    {
        return $this->appearance;
    }

    public function setAppearance($appearance)
    {
        $this->appearance = $appearance;
    }
}

