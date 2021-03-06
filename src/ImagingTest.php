<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * Any medical imaging modality typically used for diagnostic purposes.
 */
class ImagingTest extends MedicalTest
{
    /**
     * Imaging technique used.
     */
    private $imagingTechnique;

    public function getImagingTechnique()
    {
        return $this->imagingTechnique;
    }

    public function setImagingTechnique($imagingTechnique)
    {
        $this->imagingTechnique = $imagingTechnique;
    }
}

