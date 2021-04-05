<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * Any recommendation made by a standard society (e.g. ACC/AHA) or consensus
 * statement that denotes how to diagnose and treat a particular condition. Note:
 * this type should be used to tag the actual guideline recommendation; if the
 * guideline recommendation occurs in a larger scholarly article, use
 * MedicalScholarlyArticle to tag the overall article, not this type. Note also:
 * the organization making the recommendation should be captured in the
 * recognizingAuthority base property of MedicalEntity.
 */
class MedicalGuideline extends MedicalEntity
{
    /**
     * The medical conditions, treatments, etc. that are the subject of the guideline.
     */
    private $guidelineSubject;

    /**
     * Date on which this guideline's recommendation was made.
     */
    private $guidelineDate;

    /**
     * Strength of evidence of the data used to formulate the guideline (enumerated).
     */
    private $evidenceLevel;

    /**
     * Source of the data used to formulate the guidance, e.g. RCT, consensus opinion,
     * etc.
     */
    private $evidenceOrigin;

    public function getGuidelineSubject()
    {
        return $this->guidelineSubject;
    }

    public function setGuidelineSubject($guidelineSubject)
    {
        $this->guidelineSubject = $guidelineSubject;
    }

    public function getGuidelineDate()
    {
        return $this->guidelineDate;
    }

    public function setGuidelineDate($guidelineDate)
    {
        $this->guidelineDate = $guidelineDate;
    }

    public function getEvidenceLevel()
    {
        return $this->evidenceLevel;
    }

    public function setEvidenceLevel($evidenceLevel)
    {
        $this->evidenceLevel = $evidenceLevel;
    }

    public function getEvidenceOrigin()
    {
        return $this->evidenceOrigin;
    }

    public function setEvidenceOrigin($evidenceOrigin)
    {
        $this->evidenceOrigin = $evidenceOrigin;
    }
}

