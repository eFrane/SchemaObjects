<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A web page that provides medical information.
 */
class MedicalWebPage extends WebPage
{
    /**
     * An aspect of medical practice that is considered on the page, such as
     * 'diagnosis', 'treatment', 'causes', 'prognosis', 'etiology', 'epidemiology',
     * etc.
     */
    private $aspect;

    /**
     * Medical audience for page.
     */
    private $medicalAudience;

    public function getAspect()
    {
        return $this->aspect;
    }

    public function setAspect($aspect)
    {
        $this->aspect = $aspect;
    }

    public function getMedicalAudience()
    {
        return $this->medicalAudience;
    }

    public function setMedicalAudience($medicalAudience)
    {
        $this->medicalAudience = $medicalAudience;
    }
}

