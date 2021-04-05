<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * The LearningResource type can be used to indicate [[CreativeWork]]s (whether
 * physical or digital) that have a particular and explicit orientation towards
 * learning, education, skill acquisition, and other educational purposes.
 *
 * [[LearningResource]] is expected to be used as an addition to a primary type
 * such as [[Book]], [[VideoObject]], [[Product]] etc.
 *
 * [[EducationEvent]] serves a similar purpose for event-like things (e.g. a
 * [[Trip]]). A [[LearningResource]] may be created as a result of an
 * [[EducationEvent]], for example by recording one.
 */
class LearningResource extends CreativeWork
{
    /**
     * The level in terms of progression through an educational or training context.
     * Examples of educational levels include 'beginner', 'intermediate' or 'advanced',
     * and formal sets of level indicators.
     */
    private $educationalLevel;

    /**
     * Knowledge, skill, ability or personal attribute that must be demonstrated by a
     * person or other entity in order to do something such as earn an Educational
     * Occupational Credential or understand a LearningResource.
     */
    private $competencyRequired;

    public function getEducationalLevel()
    {
        return $this->educationalLevel;
    }

    public function setEducationalLevel($educationalLevel)
    {
        $this->educationalLevel = $educationalLevel;
    }

    public function getCompetencyRequired()
    {
        return $this->competencyRequired;
    }

    public function setCompetencyRequired($competencyRequired)
    {
        $this->competencyRequired = $competencyRequired;
    }
}

