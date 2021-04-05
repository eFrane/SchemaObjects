<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A thesis or dissertation document submitted in support of candidature for an
 * academic degree or professional qualification.
 */
class Thesis extends CreativeWork
{
    /**
     * Qualification, candidature, degree, application that Thesis supports.
     */
    private $inSupportOf;

    public function getInSupportOf()
    {
        return $this->inSupportOf;
    }

    public function setInSupportOf($inSupportOf)
    {
        $this->inSupportOf = $inSupportOf;
    }
}

