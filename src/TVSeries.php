<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * CreativeWorkSeries dedicated to TV broadcast and associated online delivery.
 */
class TVSeries extends CreativeWorkSeries
{
    /**
     * The composer of the soundtrack.
     */
    private $musicBy;

    /**
     * The number of seasons in this series.
     */
    private $numberOfSeasons;

    /**
     * An episode of a TV/radio series or season.
     */
    private $episodes;

    /**
     * An episode of a tv, radio or game media within a series or season.
     */
    private $episode;

    /**
     * A season that is part of the media series.
     */
    private $containsSeason;

    public function getMusicBy()
    {
        return $this->musicBy;
    }

    public function setMusicBy($musicBy)
    {
        $this->musicBy = $musicBy;
    }

    public function getNumberOfSeasons()
    {
        return $this->numberOfSeasons;
    }

    public function setNumberOfSeasons($numberOfSeasons)
    {
        $this->numberOfSeasons = $numberOfSeasons;
    }

    public function getEpisodes()
    {
        return $this->episodes;
    }

    public function setEpisodes($episodes)
    {
        $this->episodes = $episodes;
    }

    public function getEpisode()
    {
        return $this->episode;
    }

    public function setEpisode($episode)
    {
        $this->episode = $episode;
    }

    public function getContainsSeason()
    {
        return $this->containsSeason;
    }

    public function setContainsSeason($containsSeason)
    {
        $this->containsSeason = $containsSeason;
    }
}

