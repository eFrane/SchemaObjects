<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A facility, often associated with a hospital or medical school, that is devoted
 * to the specific diagnosis and/or healthcare. Previously limited to outpatients
 * but with evolution it may be open to inpatients as well.
 */
class MedicalClinic extends MedicalOrganization
{
    /**
     * A medical service available from this provider.
     */
    private $availableService;

    public function getAvailableService()
    {
        return $this->availableService;
    }

    public function setAvailableService($availableService)
    {
        $this->availableService = $availableService;
    }
}

