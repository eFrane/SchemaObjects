<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * An educational organization.
 */
class EducationalOrganization extends CivicStructure
{
    /**
     * Alumni of an organization.
     */
    private $alumni;

    public function getAlumni()
    {
        return $this->alumni;
    }

    public function setAlumni($alumni)
    {
        $this->alumni = $alumni;
    }
}

