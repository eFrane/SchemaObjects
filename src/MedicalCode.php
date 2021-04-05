<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A code for a medical entity.
 */
class MedicalCode extends CategoryCode
{
    /**
     * The coding system, e.g. 'ICD-10'.
     */
    private $codingSystem;

    public function getCodingSystem()
    {
        return $this->codingSystem;
    }

    public function setCodingSystem($codingSystem)
    {
        $this->codingSystem = $codingSystem;
    }
}

