<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * Any medical intervention designed to prevent, treat, and cure human diseases and
 * medical conditions, including both curative and palliative therapies. Medical
 * therapies are typically processes of care relying upon pharmacotherapy,
 * behavioral therapy, supportive therapy (with fluid or nutrition for example), or
 * detoxification (e.g. hemodialysis) aimed at improving or preventing a health
 * condition.
 */
class MedicalTherapy extends TherapeuticProcedure
{
    /**
     * A contraindication for this therapy.
     */
    private $contraindication;

    /**
     * A therapy that duplicates or overlaps this one.
     */
    private $duplicateTherapy;

    public function getContraindication()
    {
        return $this->contraindication;
    }

    public function setContraindication($contraindication)
    {
        $this->contraindication = $contraindication;
    }

    public function getDuplicateTherapy()
    {
        return $this->duplicateTherapy;
    }

    public function setDuplicateTherapy($duplicateTherapy)
    {
        $this->duplicateTherapy = $duplicateTherapy;
    }
}

