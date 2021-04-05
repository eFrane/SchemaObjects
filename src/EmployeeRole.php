<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A subclass of OrganizationRole used to describe employee relationships.
 */
class EmployeeRole extends OrganizationRole
{
    /**
     * The currency (coded using [ISO 4217](http://en.wikipedia.org/wiki/ISO_4217) )
     * used for the main salary information in this job posting or for this employee.
     */
    private $salaryCurrency;

    public function getSalaryCurrency()
    {
        return $this->salaryCurrency;
    }

    public function setSalaryCurrency($salaryCurrency)
    {
        $this->salaryCurrency = $salaryCurrency;
    }
}

