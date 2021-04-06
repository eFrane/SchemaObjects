<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * An EducationalAudience.
 */
class EducationalAudience extends Audience
{
    /**
     * An educationalRole of an EducationalAudience.
     */
    private $educationalRole;

    public function getEducationalRole()
    {
        return $this->educationalRole;
    }

    public function setEducationalRole($educationalRole)
    {
        $this->educationalRole = $educationalRole;
    }
}

