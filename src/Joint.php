<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * The anatomical location at which two or more bones make contact.
 */
class Joint extends AnatomicalStructure
{
    /**
     * The degree of mobility the joint allows.
     */
    private $functionalClass;

    /**
     * The biomechanical properties of the bone.
     */
    private $biomechnicalClass;

    /**
     * The name given to how bone physically connects to each other.
     */
    private $structuralClass;

    public function getFunctionalClass()
    {
        return $this->functionalClass;
    }

    public function setFunctionalClass($functionalClass)
    {
        $this->functionalClass = $functionalClass;
    }

    public function getBiomechnicalClass()
    {
        return $this->biomechnicalClass;
    }

    public function setBiomechnicalClass($biomechnicalClass)
    {
        $this->biomechnicalClass = $biomechnicalClass;
    }

    public function getStructuralClass()
    {
        return $this->structuralClass;
    }

    public function setStructuralClass($structuralClass)
    {
        $this->structuralClass = $structuralClass;
    }
}

