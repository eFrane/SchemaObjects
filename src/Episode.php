<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A media episode (e.g. TV, radio, video game) which can be part of a series or
 * season.
 */
class Episode extends CreativeWork
{
    /**
     * Position of the episode within an ordered group of episodes.
     */
    private $episodeNumber;

    public function getEpisodeNumber()
    {
        return $this->episodeNumber;
    }

    public function setEpisodeNumber($episodeNumber)
    {
        $this->episodeNumber = $episodeNumber;
    }
}

