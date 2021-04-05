<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A direction indicating a single action to do in the instructions for how to
 * achieve a result.
 */
class HowToDirection extends CreativeWork
{
    /**
     * A media object representing the circumstances before performing this direction.
     */
    private $beforeMedia;

    /**
     * A media object representing the circumstances after performing this direction.
     */
    private $afterMedia;

    /**
     * The length of time it takes to prepare the items to be used in instructions or a
     * direction, in [ISO 8601 duration format](http://en.wikipedia.org/wiki/ISO_8601).
     */
    private $prepTime;

    /**
     * A sub-property of instrument. A supply consumed when performing instructions or
     * a direction.
     */
    private $supply;

    /**
     * The length of time it takes to perform instructions or a direction (not
     * including time to prepare the supplies), in [ISO 8601 duration
     * format](http://en.wikipedia.org/wiki/ISO_8601).
     */
    private $performTime;

    /**
     * A media object representing the circumstances while performing this direction.
     */
    private $duringMedia;

    public function getBeforeMedia()
    {
        return $this->beforeMedia;
    }

    public function setBeforeMedia($beforeMedia)
    {
        $this->beforeMedia = $beforeMedia;
    }

    public function getAfterMedia()
    {
        return $this->afterMedia;
    }

    public function setAfterMedia($afterMedia)
    {
        $this->afterMedia = $afterMedia;
    }

    public function getPrepTime()
    {
        return $this->prepTime;
    }

    public function setPrepTime($prepTime)
    {
        $this->prepTime = $prepTime;
    }

    public function getSupply()
    {
        return $this->supply;
    }

    public function setSupply($supply)
    {
        $this->supply = $supply;
    }

    public function getPerformTime()
    {
        return $this->performTime;
    }

    public function setPerformTime($performTime)
    {
        $this->performTime = $performTime;
    }

    public function getDuringMedia()
    {
        return $this->duringMedia;
    }

    public function setDuringMedia($duringMedia)
    {
        $this->duringMedia = $duringMedia;
    }
}

