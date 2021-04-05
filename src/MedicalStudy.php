<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A medical study is an umbrella type covering all kinds of research studies
 * relating to human medicine or health, including observational studies and
 * interventional trials and registries, randomized, controlled or not. When the
 * specific type of study is known, use one of the extensions of this type, such as
 * MedicalTrial or MedicalObservationalStudy. Also, note that this type should be
 * used to mark up data that describes the study itself; to tag an article that
 * publishes the results of a study, use MedicalScholarlyArticle. Note: use the
 * code property of MedicalEntity to store study IDs, e.g. clinicaltrials.gov ID.
 */
class MedicalStudy extends MedicalEntity
{
    /**
     * Specifying the health condition(s) of a patient, medical study, or other target
     * audience.
     */
    private $healthCondition;

    /**
     * A subject of the study, i.e. one of the medical conditions, therapies, devices,
     * drugs, etc. investigated by the study.
     */
    private $studySubject;

    /**
     * The location in which the study is taking/took place.
     */
    private $studyLocation;

    public function getHealthCondition()
    {
        return $this->healthCondition;
    }

    public function setHealthCondition($healthCondition)
    {
        $this->healthCondition = $healthCondition;
    }

    public function getStudySubject()
    {
        return $this->studySubject;
    }

    public function setStudySubject($studySubject)
    {
        $this->studySubject = $studySubject;
    }

    public function getStudyLocation()
    {
        return $this->studyLocation;
    }

    public function setStudyLocation($studyLocation)
    {
        $this->studyLocation = $studyLocation;
    }
}

