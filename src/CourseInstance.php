<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * An instance of a [[Course]] which is distinct from other instances because it is
 * offered at a different time or location or through different media or modes of
 * study or to a specific section of students.
 */
class CourseInstance extends Event
{
    /**
     * A person assigned to instruct or provide instructional assistance for the
     * [[CourseInstance]].
     */
    private $instructor;

    /**
     * The amount of work expected of students taking the course, often provided as a
     * figure per week or per month, and may be broken down by type. For example, "2
     * hours of lectures, 1 hour of lab work and 3 hours of independent study per
     * week".
     */
    private $courseWorkload;

    /**
     * The medium or means of delivery of the course instance or the mode of study,
     * either as a text label (e.g. "online", "onsite" or "blended"; "synchronous" or
     * "asynchronous"; "full-time" or "part-time") or as a URL reference to a term from
     * a controlled vocabulary (e.g. https://ceds.ed.gov/element/001311#Asynchronous ).
     */
    private $courseMode;

    public function getInstructor()
    {
        return $this->instructor;
    }

    public function setInstructor($instructor)
    {
        $this->instructor = $instructor;
    }

    public function getCourseWorkload()
    {
        return $this->courseWorkload;
    }

    public function setCourseWorkload($courseWorkload)
    {
        $this->courseWorkload = $courseWorkload;
    }

    public function getCourseMode()
    {
        return $this->courseMode;
    }

    public function setCourseMode($courseMode)
    {
        $this->courseMode = $courseMode;
    }
}

