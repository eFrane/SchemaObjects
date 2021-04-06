<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A class of medical drugs, e.g., statins. Classes can represent general
 * pharmacological class, common mechanisms of action, common physiological
 * effects, etc.
 */
class DrugClass extends MedicalEntity
{
    /**
     * Specifying a drug or medicine used in a medication procedure.
     */
    private $drug;

    public function getDrug()
    {
        return $this->drug;
    }

    public function setDrug($drug)
    {
        $this->drug = $drug;
    }
}

