<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * Intended audience for an item, i.e. the group for whom the item was created.
 */
class Audience extends Intangible
{
    /**
     * The geographic area associated with the audience.
     */
    private $geographicArea;

    /**
     * The target group associated with a given audience (e.g. veterans, car owners,
     * musicians, etc.).
     */
    private $audienceType;

    public function getGeographicArea()
    {
        return $this->geographicArea;
    }

    public function setGeographicArea($geographicArea)
    {
        $this->geographicArea = $geographicArea;
    }

    public function getAudienceType()
    {
        return $this->audienceType;
    }

    public function setAudienceType($audienceType)
    {
        $this->audienceType = $audienceType;
    }
}

