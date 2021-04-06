<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * An educational or occupational credential. A diploma, academic degree,
 * certification, qualification, badge, etc., that may be awarded to a person or
 * other entity that meets the requirements defined by the credentialer.
 */
class EducationalOccupationalCredential extends CreativeWork
{
    /**
     * The category or type of credential being described, for example "degree”,
     * “certificate”, “badge”, or more specific term.
     */
    private $credentialCategory;

    /**
     * An organization that acknowledges the validity, value or utility of a
     * credential. Note: recognition may include a process of quality assurance or
     * accreditation.
     */
    private $recognizedBy;

    public function getCredentialCategory()
    {
        return $this->credentialCategory;
    }

    public function setCredentialCategory($credentialCategory)
    {
        $this->credentialCategory = $credentialCategory;
    }

    public function getRecognizedBy()
    {
        return $this->recognizedBy;
    }

    public function setRecognizedBy($recognizedBy)
    {
        $this->recognizedBy = $recognizedBy;
    }
}

