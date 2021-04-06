<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A medical laboratory that offers on-site or off-site diagnostic services.
 */
class DiagnosticLab extends MedicalOrganization
{
    /**
     * A diagnostic test or procedure offered by this lab.
     */
    private $availableTest;

    public function getAvailableTest()
    {
        return $this->availableTest;
    }

    public function setAvailableTest($availableTest)
    {
        $this->availableTest = $availableTest;
    }
}

