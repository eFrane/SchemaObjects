<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A media season e.g. tv, radio, video game etc.
 */
class CreativeWorkSeason extends CreativeWork
{
    /**
     * Position of the season within an ordered group of seasons.
     */
    private $seasonNumber;

    /**
     * The series to which this episode or season belongs.
     */
    private $partOfSeries;

    public function getSeasonNumber()
    {
        return $this->seasonNumber;
    }

    public function setSeasonNumber($seasonNumber)
    {
        $this->seasonNumber = $seasonNumber;
    }

    public function getPartOfSeries()
    {
        return $this->partOfSeries;
    }

    public function setPartOfSeries($partOfSeries)
    {
        $this->partOfSeries = $partOfSeries;
    }
}

