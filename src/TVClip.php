<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A short TV program or a segment/part of a TV program.
 */
class TVClip extends Clip
{
    /**
     * The TV series to which this episode or season belongs.
     */
    private $partOfTVSeries;

    public function getPartOfTVSeries()
    {
        return $this->partOfTVSeries;
    }

    public function setPartOfTVSeries($partOfTVSeries)
    {
        $this->partOfTVSeries = $partOfTVSeries;
    }
}

