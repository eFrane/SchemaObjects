<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A doctor's office.
 */
class Physician extends MedicalOrganization
{
    /**
     * A hospital with which the physician or office is affiliated.
     */
    private $hospitalAffiliation;

    public function getHospitalAffiliation()
    {
        return $this->hospitalAffiliation;
    }

    public function setHospitalAffiliation($hospitalAffiliation)
    {
        $this->hospitalAffiliation = $hospitalAffiliation;
    }
}

