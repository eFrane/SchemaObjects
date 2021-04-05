<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * The act of participating in performance arts.
 */
class PerformAction extends PlayAction
{
    /**
     * A sub property of location. The entertainment business where the action
     * occurred.
     */
    private $entertainmentBusiness;

    public function getEntertainmentBusiness()
    {
        return $this->entertainmentBusiness;
    }

    public function setEntertainmentBusiness($entertainmentBusiness)
    {
        $this->entertainmentBusiness = $entertainmentBusiness;
    }
}

