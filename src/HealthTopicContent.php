<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * [[HealthTopicContent]] is [[WebContent]] that is about some aspect of a health
 * topic, e.g. a condition, its symptoms or treatments. Such content may be
 * comprised of several parts or sections and use different types of media.
 * Multiple instances of [[WebContent]] (and hence [[HealthTopicContent]]) can be
 * related using [[hasPart]] / [[isPartOf]] where there is some kind of content
 * hierarchy, and their content described with [[about]] and [[mentions]] e.g.
 * building upon the existing [[MedicalCondition]] vocabulary.
 */
class HealthTopicContent extends WebContent
{
    /**
     * Indicates the aspect or aspects specifically addressed in some
     * [[HealthTopicContent]]. For example, that the content is an overview, or that it
     * talks about treatment, self-care, treatments or their side-effects.
     */
    private $hasHealthAspect;

    public function getHasHealthAspect()
    {
        return $this->hasHealthAspect;
    }

    public function setHasHealthAspect($hasHealthAspect)
    {
        $this->hasHealthAspect = $hasHealthAspect;
    }
}

