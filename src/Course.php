<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A description of an educational course which may be offered as distinct
 * instances at which take place at different times or take place at different
 * locations, or be offered through different media or modes of study. An
 * educational course is a sequence of one or more educational events and/or
 * creative works which aims to build knowledge, competence or ability of learners.
 */
class Course extends LearningResource
{
    /**
     * A description of the qualification, award, certificate, diploma or other
     * occupational credential awarded as a consequence of successful completion of
     * this course or program.
     */
    private $occupationalCredentialAwarded;

    /**
     * The number of credits or units awarded by a Course or required to complete an
     * EducationalOccupationalProgram.
     */
    private $numberOfCredits;

    /**
     * Requirements for taking the Course. May be completion of another [[Course]] or a
     * textual description like "permission of instructor". Requirements may be a
     * pre-requisite competency, referenced using [[AlignmentObject]].
     */
    private $coursePrerequisites;

    /**
     * An offering of the course at a specific time and place or through specific media
     * or mode of study or to a specific section of students.
     */
    private $hasCourseInstance;

    /**
     * A description of the qualification, award, certificate, diploma or other
     * educational credential awarded as a consequence of successful completion of this
     * course or program.
     */
    private $educationalCredentialAwarded;

    /**
     * The identifier for the [[Course]] used by the course [[provider]] (e.g. CS101 or
     * 6.001).
     */
    private $courseCode;

    public function getOccupationalCredentialAwarded()
    {
        return $this->occupationalCredentialAwarded;
    }

    public function setOccupationalCredentialAwarded($occupationalCredentialAwarded)
    {
        $this->occupationalCredentialAwarded = $occupationalCredentialAwarded;
    }

    public function getNumberOfCredits()
    {
        return $this->numberOfCredits;
    }

    public function setNumberOfCredits($numberOfCredits)
    {
        $this->numberOfCredits = $numberOfCredits;
    }

    public function getCoursePrerequisites()
    {
        return $this->coursePrerequisites;
    }

    public function setCoursePrerequisites($coursePrerequisites)
    {
        $this->coursePrerequisites = $coursePrerequisites;
    }

    public function getHasCourseInstance()
    {
        return $this->hasCourseInstance;
    }

    public function setHasCourseInstance($hasCourseInstance)
    {
        $this->hasCourseInstance = $hasCourseInstance;
    }

    public function getEducationalCredentialAwarded()
    {
        return $this->educationalCredentialAwarded;
    }

    public function setEducationalCredentialAwarded($educationalCredentialAwarded)
    {
        $this->educationalCredentialAwarded = $educationalCredentialAwarded;
    }

    public function getCourseCode()
    {
        return $this->courseCode;
    }

    public function setCourseCode($courseCode)
    {
        $this->courseCode = $courseCode;
    }
}

