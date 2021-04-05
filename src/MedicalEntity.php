<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * The most generic type of entity related to health and the practice of medicine.
 */
class MedicalEntity extends Thing
{
    /**
     * If applicable, a medical specialty in which this entity is relevant.
     */
    private $relevantSpecialty;

    /**
     * If applicable, the organization that officially recognizes this entity as part
     * of its endorsed system of medicine.
     */
    private $recognizingAuthority;

    /**
     * A medical study or trial related to this entity.
     */
    private $study;

    /**
     * A medical guideline related to this entity.
     */
    private $guideline;

    /**
     * A medical code for the entity, taken from a controlled vocabulary or ontology
     * such as ICD-9, DiseasesDB, MeSH, SNOMED-CT, RxNorm, etc.
     */
    private $code;

    /**
     * The system of medicine that includes this MedicalEntity, for example
     * 'evidence-based', 'homeopathic', 'chiropractic', etc.
     */
    private $medicineSystem;

    public function getRelevantSpecialty()
    {
        return $this->relevantSpecialty;
    }

    public function setRelevantSpecialty($relevantSpecialty)
    {
        $this->relevantSpecialty = $relevantSpecialty;
    }

    public function getRecognizingAuthority()
    {
        return $this->recognizingAuthority;
    }

    public function setRecognizingAuthority($recognizingAuthority)
    {
        $this->recognizingAuthority = $recognizingAuthority;
    }

    public function getStudy()
    {
        return $this->study;
    }

    public function setStudy($study)
    {
        $this->study = $study;
    }

    public function getGuideline()
    {
        return $this->guideline;
    }

    public function setGuideline($guideline)
    {
        $this->guideline = $guideline;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function setCode($code)
    {
        $this->code = $code;
    }

    public function getMedicineSystem()
    {
        return $this->medicineSystem;
    }

    public function setMedicineSystem($medicineSystem)
    {
        $this->medicineSystem = $medicineSystem;
    }
}

