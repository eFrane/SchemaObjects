<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * For a given health insurance plan, the specification for costs and coverage of
 * prescription drugs.
 */
class HealthPlanFormulary extends Intangible
{
    /**
     * Whether prescriptions can be delivered by mail.
     */
    private $offersPrescriptionByMail;

    /**
     * Whether The costs to the patient for services under this network or formulary.
     */
    private $healthPlanCostSharing;

    public function getOffersPrescriptionByMail()
    {
        return $this->offersPrescriptionByMail;
    }

    public function setOffersPrescriptionByMail($offersPrescriptionByMail)
    {
        $this->offersPrescriptionByMail = $offersPrescriptionByMail;
    }

    public function getHealthPlanCostSharing()
    {
        return $this->healthPlanCostSharing;
    }

    public function setHealthPlanCostSharing($healthPlanCostSharing)
    {
        $this->healthPlanCostSharing = $healthPlanCostSharing;
    }
}

