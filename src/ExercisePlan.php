<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * Fitness-related activity designed for a specific health-related purpose,
 * including defined exercise routines as well as activity prescribed by a
 * clinician.
 */
class ExercisePlan extends CreativeWork
{
    /**
     * Number of times one should repeat the activity.
     */
    private $repetitions;

    /**
     * Quantitative measure of the physiologic output of the exercise; also referred to
     * as energy expenditure.
     */
    private $workload;

    /**
     * Length of time to engage in the activity.
     */
    private $activityDuration;

    /**
     * How often one should break from the activity.
     */
    private $restPeriods;

    /**
     * Type(s) of exercise or activity, such as strength training, flexibility
     * training, aerobics, cardiac rehabilitation, etc.
     */
    private $exerciseType;

    /**
     * Quantitative measure gauging the degree of force involved in the exercise, for
     * example, heartbeats per minute. May include the velocity of the movement.
     */
    private $intensity;

    /**
     * How often one should engage in the activity.
     */
    private $activityFrequency;

    /**
     * Any additional component of the exercise prescription that may need to be
     * articulated to the patient. This may include the order of exercises, the number
     * of repetitions of movement, quantitative distance, progressions over time, etc.
     */
    private $additionalVariable;

    public function getRepetitions()
    {
        return $this->repetitions;
    }

    public function setRepetitions($repetitions)
    {
        $this->repetitions = $repetitions;
    }

    public function getWorkload()
    {
        return $this->workload;
    }

    public function setWorkload($workload)
    {
        $this->workload = $workload;
    }

    public function getActivityDuration()
    {
        return $this->activityDuration;
    }

    public function setActivityDuration($activityDuration)
    {
        $this->activityDuration = $activityDuration;
    }

    public function getRestPeriods()
    {
        return $this->restPeriods;
    }

    public function setRestPeriods($restPeriods)
    {
        $this->restPeriods = $restPeriods;
    }

    public function getExerciseType()
    {
        return $this->exerciseType;
    }

    public function setExerciseType($exerciseType)
    {
        $this->exerciseType = $exerciseType;
    }

    public function getIntensity()
    {
        return $this->intensity;
    }

    public function setIntensity($intensity)
    {
        $this->intensity = $intensity;
    }

    public function getActivityFrequency()
    {
        return $this->activityFrequency;
    }

    public function setActivityFrequency($activityFrequency)
    {
        $this->activityFrequency = $activityFrequency;
    }

    public function getAdditionalVariable()
    {
        return $this->additionalVariable;
    }

    public function setAdditionalVariable($additionalVariable)
    {
        $this->additionalVariable = $additionalVariable;
    }
}

