<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * An electronic file or document.
 */
class DigitalDocument extends CreativeWork
{
    /**
     * A permission related to the access to this document (e.g. permission to read or
     * write an electronic document). For a public document, specify a grantee with an
     * Audience with audienceType equal to "public".
     */
    private $hasDigitalDocumentPermission;

    public function getHasDigitalDocumentPermission()
    {
        return $this->hasDigitalDocumentPermission;
    }

    public function setHasDigitalDocumentPermission($hasDigitalDocumentPermission)
    {
        $this->hasDigitalDocumentPermission = $hasDigitalDocumentPermission;
    }
}

