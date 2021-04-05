<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A specific object or file containing a Legislation. Note that the same
 * Legislation can be published in multiple files. For example, a digitally signed
 * PDF, a plain PDF and an HTML version.
 */
class LegislationObject extends MediaObject
{
    /**
     * The legal value of this legislation file. The same legislation can be written in
     * multiple files with different legal values. Typically a digitally signed PDF
     * have a "stronger" legal value than the HTML file of the same act.
     */
    private $legislationLegalValue;

    public function getLegislationLegalValue()
    {
        return $this->legislationLegalValue;
    }

    public function setLegislationLegalValue($legislationLegalValue)
    {
        $this->legislationLegalValue = $legislationLegalValue;
    }
}

