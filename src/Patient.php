<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A patient is any person recipient of health care services.
 */
class Patient extends MedicalAudience
{
    /**
     * One or more alternative conditions considered in the differential diagnosis
     * process as output of a diagnosis process.
     */
    private $diagnosis;

    public function getDiagnosis()
    {
        return $this->diagnosis;
    }

    public function setDiagnosis($diagnosis)
    {
        $this->diagnosis = $diagnosis;
    }
}

