<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A subclass of Role used to describe roles within organizations.
 */
class OrganizationRole extends Role
{
    /**
     * A number associated with a role in an organization, for example, the number on
     * an athlete's jersey.
     */
    private $numberedPosition;

    public function getNumberedPosition()
    {
        return $this->numberedPosition;
    }

    public function setNumberedPosition($numberedPosition)
    {
        $this->numberedPosition = $numberedPosition;
    }
}

