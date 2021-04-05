<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A movie.
 */
class Movie extends CreativeWork
{
    /**
     * The country of the principal offices of the production company or individual
     * responsible for the movie or program.
     */
    private $countryOfOrigin;

    /**
     * A director of e.g. tv, radio, movie, video gaming etc. content, or of an event.
     * Directors can be associated with individual items or with a series, episode,
     * clip.
     */
    private $director;

    public function getCountryOfOrigin()
    {
        return $this->countryOfOrigin;
    }

    public function setCountryOfOrigin($countryOfOrigin)
    {
        $this->countryOfOrigin = $countryOfOrigin;
    }

    public function getDirector()
    {
        return $this->director;
    }

    public function setDirector($director)
    {
        $this->director = $director;
    }
}

