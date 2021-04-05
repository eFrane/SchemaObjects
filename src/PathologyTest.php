<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A medical test performed by a laboratory that typically involves examination of
 * a tissue sample by a pathologist.
 */
class PathologyTest extends MedicalTest
{
    /**
     * The type of tissue sample required for the test.
     */
    private $tissueSample;

    public function getTissueSample()
    {
        return $this->tissueSample;
    }

    public function setTissueSample($tissueSample)
    {
        $this->tissueSample = $tissueSample;
    }
}

