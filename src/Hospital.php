<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A hospital.
 */
class Hospital extends MedicalOrganization
{
    /**
     * Indicates data describing a hospital, e.g. a CDC [[CDCPMDRecord]] or as some
     * kind of [[Dataset]].
     */
    private $healthcareReportingData;

    /**
     * A medical specialty of the provider.
     */
    private $medicalSpecialty;

    public function getHealthcareReportingData()
    {
        return $this->healthcareReportingData;
    }

    public function setHealthcareReportingData($healthcareReportingData)
    {
        $this->healthcareReportingData = $healthcareReportingData;
    }

    public function getMedicalSpecialty()
    {
        return $this->medicalSpecialty;
    }

    public function setMedicalSpecialty($medicalSpecialty)
    {
        $this->medicalSpecialty = $medicalSpecialty;
    }
}

