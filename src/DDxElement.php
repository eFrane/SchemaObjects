<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * An alternative, closely-related condition typically considered later in the
 * differential diagnosis process along with the signs that are used to distinguish
 * it.
 */
class DDxElement extends MedicalIntangible
{
    /**
     * One of a set of signs and symptoms that can be used to distinguish this
     * diagnosis from others in the differential diagnosis.
     */
    private $distinguishingSign;

    public function getDistinguishingSign()
    {
        return $this->distinguishingSign;
    }

    public function setDistinguishingSign($distinguishingSign)
    {
        $this->distinguishingSign = $distinguishingSign;
    }
}

