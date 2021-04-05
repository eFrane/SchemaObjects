<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * Event type: Sports event.
 */
class SportsEvent extends Event
{
    /**
     * A type of sport (e.g. Baseball).
     */
    private $sport;

    /**
     * The away team in a sports event.
     */
    private $awayTeam;

    /**
     * A competitor in a sports event.
     */
    private $competitor;

    /**
     * The home team in a sports event.
     */
    private $homeTeam;

    public function getSport()
    {
        return $this->sport;
    }

    public function setSport($sport)
    {
        $this->sport = $sport;
    }

    public function getAwayTeam()
    {
        return $this->awayTeam;
    }

    public function setAwayTeam($awayTeam)
    {
        $this->awayTeam = $awayTeam;
    }

    public function getCompetitor()
    {
        return $this->competitor;
    }

    public function setCompetitor($competitor)
    {
        $this->competitor = $competitor;
    }

    public function getHomeTeam()
    {
        return $this->homeTeam;
    }

    public function setHomeTeam($homeTeam)
    {
        $this->homeTeam = $homeTeam;
    }
}

