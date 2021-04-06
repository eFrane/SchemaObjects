<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A program offered by an institution which determines the learning progress to
 * achieve an outcome, usually a credential like a degree or certificate. This
 * would define a discrete set of opportunities (e.g., job, courses) that together
 * constitute a program with a clear start, end, set of requirements, and
 * transition to a new occupational opportunity (e.g., a job), or sometimes a
 * higher educational opportunity (e.g., an advanced degree).
 */
class EducationalOccupationalProgram extends Intangible
{
    /**
     * The time of day the program normally runs. For example, "evenings".
     */
    private $timeOfDay;

    /**
     * The date at which the program stops collecting applications for the next
     * enrollment cycle.
     */
    private $applicationDeadline;

    /**
     * Similar to courseMode, The medium or means of delivery of the program as a
     * whole. The value may either be a text label (e.g. "online", "onsite" or
     * "blended"; "synchronous" or "asynchronous"; "full-time" or "part-time") or a URL
     * reference to a term from a controlled vocabulary (e.g.
     * https://ceds.ed.gov/element/001311#Asynchronous ).
     */
    private $educationalProgramMode;

    /**
     * A financial aid type or program which students may use to pay for tuition or
     * fees associated with the program.
     */
    private $financialAidEligible;

    /**
     * The date at which the program begins collecting applications for the next
     * enrollment cycle.
     */
    private $applicationStartDate;

    /**
     * Prerequisites for enrolling in the program.
     */
    private $programPrerequisites;

    /**
     * The type of educational or occupational program. For example, classroom,
     * internship, alternance, etc..
     */
    private $programType;

    /**
     * The expected length of time to complete the program if attending full-time.
     */
    private $timeToComplete;

    /**
     * The maximum number of students who may be enrolled in the program.
     */
    private $maximumEnrollment;

    /**
     * The expected salary upon completing the training.
     */
    private $salaryUponCompletion;

    /**
     * A course or class that is one of the learning opportunities that constitute an
     * educational / occupational program. No information is implied about whether the
     * course is mandatory or optional; no guarantee is implied about whether the
     * course will be available to everyone on the program.
     */
    private $hasCourse;

    /**
     * The number of credits or units a full-time student would be expected to take in
     * 1 term however 'term' is defined by the institution.
     */
    private $typicalCreditsPerTerm;

    /**
     * The amount of time in a term as defined by the institution. A term is a length
     * of time where students take one or more classes. Semesters and quarters are
     * common units for term.
     */
    private $termDuration;

    /**
     * The number of times terms of study are offered per year. Semesters and quarters
     * are common units for term. For example, if the student can only take 2 semesters
     * for the program in one year, then termsPerYear should be 2.
     */
    private $termsPerYear;

    public function getTimeOfDay()
    {
        return $this->timeOfDay;
    }

    public function setTimeOfDay($timeOfDay)
    {
        $this->timeOfDay = $timeOfDay;
    }

    public function getApplicationDeadline()
    {
        return $this->applicationDeadline;
    }

    public function setApplicationDeadline($applicationDeadline)
    {
        $this->applicationDeadline = $applicationDeadline;
    }

    public function getEducationalProgramMode()
    {
        return $this->educationalProgramMode;
    }

    public function setEducationalProgramMode($educationalProgramMode)
    {
        $this->educationalProgramMode = $educationalProgramMode;
    }

    public function getFinancialAidEligible()
    {
        return $this->financialAidEligible;
    }

    public function setFinancialAidEligible($financialAidEligible)
    {
        $this->financialAidEligible = $financialAidEligible;
    }

    public function getApplicationStartDate()
    {
        return $this->applicationStartDate;
    }

    public function setApplicationStartDate($applicationStartDate)
    {
        $this->applicationStartDate = $applicationStartDate;
    }

    public function getProgramPrerequisites()
    {
        return $this->programPrerequisites;
    }

    public function setProgramPrerequisites($programPrerequisites)
    {
        $this->programPrerequisites = $programPrerequisites;
    }

    public function getProgramType()
    {
        return $this->programType;
    }

    public function setProgramType($programType)
    {
        $this->programType = $programType;
    }

    public function getTimeToComplete()
    {
        return $this->timeToComplete;
    }

    public function setTimeToComplete($timeToComplete)
    {
        $this->timeToComplete = $timeToComplete;
    }

    public function getMaximumEnrollment()
    {
        return $this->maximumEnrollment;
    }

    public function setMaximumEnrollment($maximumEnrollment)
    {
        $this->maximumEnrollment = $maximumEnrollment;
    }

    public function getSalaryUponCompletion()
    {
        return $this->salaryUponCompletion;
    }

    public function setSalaryUponCompletion($salaryUponCompletion)
    {
        $this->salaryUponCompletion = $salaryUponCompletion;
    }

    public function getHasCourse()
    {
        return $this->hasCourse;
    }

    public function setHasCourse($hasCourse)
    {
        $this->hasCourse = $hasCourse;
    }

    public function getTypicalCreditsPerTerm()
    {
        return $this->typicalCreditsPerTerm;
    }

    public function setTypicalCreditsPerTerm($typicalCreditsPerTerm)
    {
        $this->typicalCreditsPerTerm = $typicalCreditsPerTerm;
    }

    public function getTermDuration()
    {
        return $this->termDuration;
    }

    public function setTermDuration($termDuration)
    {
        $this->termDuration = $termDuration;
    }

    public function getTermsPerYear()
    {
        return $this->termsPerYear;
    }

    public function setTermsPerYear($termsPerYear)
    {
        $this->termsPerYear = $termsPerYear;
    }
}

