<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * Web applications.
 */
class WebApplication extends SoftwareApplication
{
    /**
     * Specifies browser requirements in human-readable text. For example, 'requires
     * HTML5 support'.
     */
    private $browserRequirements;

    public function getBrowserRequirements()
    {
        return $this->browserRequirements;
    }

    public function setBrowserRequirements($browserRequirements)
    {
        $this->browserRequirements = $browserRequirements;
    }
}

