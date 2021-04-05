<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A profession, may involve prolonged training and/or a formal qualification.
 */
class Occupation extends Intangible
{
    /**
     * A statement of knowledge, skill, ability, task or any other assertion expressing
     * a competency that is desired or required to fulfill this role or to work in this
     * occupation.
     */
    private $skills;

    /**
     * Description of skills and experience needed for the position or Occupation.
     */
    private $experienceRequirements;

    /**
     * Educational background needed for the position or Occupation.
     */
    private $educationRequirements;

    /**
     * The region/country for which this occupational description is appropriate. Note
     * that educational requirements and qualifications can vary between jurisdictions.
     */
    private $occupationLocation;

    public function getSkills()
    {
        return $this->skills;
    }

    public function setSkills($skills)
    {
        $this->skills = $skills;
    }

    public function getExperienceRequirements()
    {
        return $this->experienceRequirements;
    }

    public function setExperienceRequirements($experienceRequirements)
    {
        $this->experienceRequirements = $experienceRequirements;
    }

    public function getEducationRequirements()
    {
        return $this->educationRequirements;
    }

    public function setEducationRequirements($educationRequirements)
    {
        $this->educationRequirements = $educationRequirements;
    }

    public function getOccupationLocation()
    {
        return $this->occupationLocation;
    }

    public function setOccupationLocation($occupationLocation)
    {
        $this->occupationLocation = $occupationLocation;
    }
}

