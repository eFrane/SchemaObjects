<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A statistical distribution of values.
 */
class QuantitativeValueDistribution extends StructuredValue
{
    /**
     * The duration of the item (movie, audio recording, event, etc.) in [ISO 8601 date
     * format](http://en.wikipedia.org/wiki/ISO_8601).
     */
    private $duration;

    /**
     * The median value.
     */
    private $median;

    /**
     * The 75th percentile value.
     */
    private $percentile75;

    /**
     * The 90th percentile value.
     */
    private $percentile90;

    /**
     * The 10th percentile value.
     */
    private $percentile10;

    /**
     * The 25th percentile value.
     */
    private $percentile25;

    public function getDuration()
    {
        return $this->duration;
    }

    public function setDuration($duration)
    {
        $this->duration = $duration;
    }

    public function getMedian()
    {
        return $this->median;
    }

    public function setMedian($median)
    {
        $this->median = $median;
    }

    public function getPercentile75()
    {
        return $this->percentile75;
    }

    public function setPercentile75($percentile75)
    {
        $this->percentile75 = $percentile75;
    }

    public function getPercentile90()
    {
        return $this->percentile90;
    }

    public function setPercentile90($percentile90)
    {
        $this->percentile90 = $percentile90;
    }

    public function getPercentile10()
    {
        return $this->percentile10;
    }

    public function setPercentile10($percentile10)
    {
        $this->percentile10 = $percentile10;
    }

    public function getPercentile25()
    {
        return $this->percentile25;
    }

    public function setPercentile25($percentile25)
    {
        $this->percentile25 = $percentile25;
    }
}

