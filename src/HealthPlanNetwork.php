<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A US-style health insurance plan network.
 */
class HealthPlanNetwork extends Intangible
{
    /**
     * The tier(s) for this network.
     */
    private $healthPlanNetworkTier;

    public function getHealthPlanNetworkTier()
    {
        return $this->healthPlanNetworkTier;
    }

    public function setHealthPlanNetworkTier($healthPlanNetworkTier)
    {
        $this->healthPlanNetworkTier = $healthPlanNetworkTier;
    }
}

