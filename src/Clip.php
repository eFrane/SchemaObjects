<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A short TV or radio program or a segment/part of a program.
 */
class Clip extends CreativeWork
{
    /**
     * Position of the clip within an ordered group of clips.
     */
    private $clipNumber;

    /**
     * The episode to which this clip belongs.
     */
    private $partOfEpisode;

    /**
     * The start time of the clip expressed as the number of seconds from the beginning
     * of the work.
     */
    private $startOffset;

    /**
     * The season to which this episode belongs.
     */
    private $partOfSeason;

    /**
     * The end time of the clip expressed as the number of seconds from the beginning
     * of the work.
     */
    private $endOffset;

    public function getClipNumber()
    {
        return $this->clipNumber;
    }

    public function setClipNumber($clipNumber)
    {
        $this->clipNumber = $clipNumber;
    }

    public function getPartOfEpisode()
    {
        return $this->partOfEpisode;
    }

    public function setPartOfEpisode($partOfEpisode)
    {
        $this->partOfEpisode = $partOfEpisode;
    }

    public function getStartOffset()
    {
        return $this->startOffset;
    }

    public function setStartOffset($startOffset)
    {
        $this->startOffset = $startOffset;
    }

    public function getPartOfSeason()
    {
        return $this->partOfSeason;
    }

    public function setPartOfSeason($partOfSeason)
    {
        $this->partOfSeason = $partOfSeason;
    }

    public function getEndOffset()
    {
        return $this->endOffset;
    }

    public function setEndOffset($endOffset)
    {
        $this->endOffset = $endOffset;
    }
}

