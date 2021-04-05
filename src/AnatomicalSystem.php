<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * An anatomical system is a group of anatomical structures that work together to
 * perform a certain task. Anatomical systems, such as organ systems, are one
 * organizing principle of anatomy, and can includes circulatory, digestive,
 * endocrine, integumentary, immune, lymphatic, muscular, nervous, reproductive,
 * respiratory, skeletal, urinary, vestibular, and other systems.
 */
class AnatomicalSystem extends MedicalEntity
{
    /**
     * Specifying something physically contained by something else. Typically used here
     * for the underlying anatomical structures, such as organs, that comprise the
     * anatomical system.
     */
    private $comprisedOf;

    /**
     * Related anatomical structure(s) that are not part of the system but relate or
     * connect to it, such as vascular bundles associated with an organ system.
     */
    private $relatedStructure;

    /**
     * If applicable, a description of the pathophysiology associated with the
     * anatomical system, including potential abnormal changes in the mechanical,
     * physical, and biochemical functions of the system.
     */
    private $associatedPathophysiology;

    public function getComprisedOf()
    {
        return $this->comprisedOf;
    }

    public function setComprisedOf($comprisedOf)
    {
        $this->comprisedOf = $comprisedOf;
    }

    public function getRelatedStructure()
    {
        return $this->relatedStructure;
    }

    public function setRelatedStructure($relatedStructure)
    {
        $this->relatedStructure = $relatedStructure;
    }

    public function getAssociatedPathophysiology()
    {
        return $this->associatedPathophysiology;
    }

    public function setAssociatedPathophysiology($associatedPathophysiology)
    {
        $this->associatedPathophysiology = $associatedPathophysiology;
    }
}

