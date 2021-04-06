<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * CreativeWorkSeries dedicated to radio broadcast and associated online delivery.
 */
class RadioSeries extends CreativeWorkSeries
{
    /**
     * An actor, e.g. in tv, radio, movie, video games etc. Actors can be associated
     * with individual items or with a series, episode, clip.
     */
    private $actors;

    /**
     * The trailer of a movie or tv/radio series, season, episode, etc.
     */
    private $trailer;

    /**
     * The number of episodes in this season or series.
     */
    private $numberOfEpisodes;

    /**
     * A director of e.g. tv, radio, movie, video games etc. content. Directors can be
     * associated with individual items or with a series, episode, clip.
     */
    private $directors;

    /**
     * A season in a media series.
     */
    private $season;

    public function getActors()
    {
        return $this->actors;
    }

    public function setActors($actors)
    {
        $this->actors = $actors;
    }

    public function getTrailer()
    {
        return $this->trailer;
    }

    public function setTrailer($trailer)
    {
        $this->trailer = $trailer;
    }

    public function getNumberOfEpisodes()
    {
        return $this->numberOfEpisodes;
    }

    public function setNumberOfEpisodes($numberOfEpisodes)
    {
        $this->numberOfEpisodes = $numberOfEpisodes;
    }

    public function getDirectors()
    {
        return $this->directors;
    }

    public function setDirectors($directors)
    {
        $this->directors = $directors;
    }

    public function getSeason()
    {
        return $this->season;
    }

    public function setSeason($season)
    {
        $this->season = $season;
    }
}

