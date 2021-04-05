<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * The act of participating in exertive activity for the purposes of improving
 * health and fitness.
 */
class ExerciseAction extends PlayAction
{
    /**
     * A sub property of location. The course where this action was taken.
     */
    private $course;

    /**
     * A sub property of location. The course where this action was taken.
     */
    private $exerciseCourse;

    /**
     * A sub property of instrument. The exercise plan used on this action.
     */
    private $exercisePlan;

    /**
     * A sub property of instrument. The diet used in this action.
     */
    private $exerciseRelatedDiet;

    /**
     * The distance travelled, e.g. exercising or travelling.
     */
    private $distance;

    /**
     * A sub property of participant. The sports team that participated on this action.
     */
    private $sportsTeam;

    /**
     * A sub property of location. The sports event where this action occurred.
     */
    private $sportsEvent;

    /**
     * A sub property of instrument. The diet used in this action.
     */
    private $diet;

    /**
     * A sub property of location. The sports activity location where this action
     * occurred.
     */
    private $sportsActivityLocation;

    /**
     * A sub property of participant. The opponent on this action.
     */
    private $opponent;

    public function getCourse()
    {
        return $this->course;
    }

    public function setCourse($course)
    {
        $this->course = $course;
    }

    public function getExerciseCourse()
    {
        return $this->exerciseCourse;
    }

    public function setExerciseCourse($exerciseCourse)
    {
        $this->exerciseCourse = $exerciseCourse;
    }

    public function getExercisePlan()
    {
        return $this->exercisePlan;
    }

    public function setExercisePlan($exercisePlan)
    {
        $this->exercisePlan = $exercisePlan;
    }

    public function getExerciseRelatedDiet()
    {
        return $this->exerciseRelatedDiet;
    }

    public function setExerciseRelatedDiet($exerciseRelatedDiet)
    {
        $this->exerciseRelatedDiet = $exerciseRelatedDiet;
    }

    public function getDistance()
    {
        return $this->distance;
    }

    public function setDistance($distance)
    {
        $this->distance = $distance;
    }

    public function getSportsTeam()
    {
        return $this->sportsTeam;
    }

    public function setSportsTeam($sportsTeam)
    {
        $this->sportsTeam = $sportsTeam;
    }

    public function getSportsEvent()
    {
        return $this->sportsEvent;
    }

    public function setSportsEvent($sportsEvent)
    {
        $this->sportsEvent = $sportsEvent;
    }

    public function getDiet()
    {
        return $this->diet;
    }

    public function setDiet($diet)
    {
        $this->diet = $diet;
    }

    public function getSportsActivityLocation()
    {
        return $this->sportsActivityLocation;
    }

    public function setSportsActivityLocation($sportsActivityLocation)
    {
        $this->sportsActivityLocation = $sportsActivityLocation;
    }

    public function getOpponent()
    {
        return $this->opponent;
    }

    public function setOpponent($opponent)
    {
        $this->opponent = $opponent;
    }
}

