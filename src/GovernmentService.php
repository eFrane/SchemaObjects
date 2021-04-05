<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A service provided by a government organization, e.g. food stamps, veterans
 * benefits, etc.
 */
class GovernmentService extends Service
{
    /**
     * The operating organization, if different from the provider.  This enables the
     * representation of services that are provided by an organization, but operated by
     * another organization like a subcontractor.
     */
    private $serviceOperator;

    /**
     * Indicates a legal jurisdiction, e.g. of some legislation, or where some
     * government service is based.
     */
    private $jurisdiction;

    public function getServiceOperator()
    {
        return $this->serviceOperator;
    }

    public function setServiceOperator($serviceOperator)
    {
        $this->serviceOperator = $serviceOperator;
    }

    public function getJurisdiction()
    {
        return $this->jurisdiction;
    }

    public function setJurisdiction($jurisdiction)
    {
        $this->jurisdiction = $jurisdiction;
    }
}

