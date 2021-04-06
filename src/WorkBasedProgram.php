<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A program with both an educational and employment component. Typically based at
 * a workplace and structured around work-based learning, with the aim of
 * instilling competencies related to an occupation. WorkBasedProgram is used to
 * distinguish programs such as apprenticeships from school, college or other
 * classroom based educational programs.
 */
class WorkBasedProgram extends EducationalOccupationalProgram
{
    /**
     * A category describing the job, preferably using a term from a taxonomy such as
     * [BLS O*NET-SOC](http://www.onetcenter.org/taxonomy.html),
     * [ISCO-08](https://www.ilo.org/public/english/bureau/stat/isco/isco08/) or
     * similar, with the property repeated for each applicable value. Ideally the
     * taxonomy should be identified, and both the textual label and formal code for
     * the category should be provided.
     *
     * Note: for historical reasons, any textual label and formal code provided as a
     * literal may be assumed to be from O*NET-SOC.
     */
    private $occupationalCategory;

    /**
     * The estimated salary earned while in the program.
     */
    private $trainingSalary;

    public function getOccupationalCategory()
    {
        return $this->occupationalCategory;
    }

    public function setOccupationalCategory($occupationalCategory)
    {
        $this->occupationalCategory = $occupationalCategory;
    }

    public function getTrainingSalary()
    {
        return $this->trainingSalary;
    }

    public function setTrainingSalary($trainingSalary)
    {
        $this->trainingSalary = $trainingSalary;
    }
}

