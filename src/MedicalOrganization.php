<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A medical organization (physical or not), such as hospital, institution or
 * clinic.
 */
class MedicalOrganization extends Organization
{
    /**
     * Name or unique ID of network. (Networks are often reused across different
     * insurance plans).
     */
    private $healthPlanNetworkId;

    /**
     * Whether the provider is accepting new patients.
     */
    private $isAcceptingNewPatients;

    public function getHealthPlanNetworkId()
    {
        return $this->healthPlanNetworkId;
    }

    public function setHealthPlanNetworkId($healthPlanNetworkId)
    {
        $this->healthPlanNetworkId = $healthPlanNetworkId;
    }

    public function getIsAcceptingNewPatients()
    {
        return $this->isAcceptingNewPatients;
    }

    public function setIsAcceptingNewPatients($isAcceptingNewPatients)
    {
        $this->isAcceptingNewPatients = $isAcceptingNewPatients;
    }
}

