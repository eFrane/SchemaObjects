<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * Instructions that explain how to achieve a result by performing a sequence of
 * steps.
 */
class HowTo extends CreativeWork
{
    /**
     * The quantity that results by performing instructions. For example, a paper
     * airplane, 10 personalized candles.
     */
    private $yield;

    /**
     * The estimated cost of the supply or supplies consumed when performing
     * instructions.
     */
    private $estimatedCost;

    /**
     * The total time required to perform instructions or a direction (including time
     * to prepare the supplies), in [ISO 8601 duration
     * format](http://en.wikipedia.org/wiki/ISO_8601).
     */
    private $totalTime;

    /**
     * A single step item (as HowToStep, text, document, video, etc.) or a
     * HowToSection.
     */
    private $step;

    /**
     * A sub property of instrument. An object used (but not consumed) when performing
     * instructions or a direction.
     */
    private $tool;

    public function getYield()
    {
        return $this->yield;
    }

    public function setYield($yield)
    {
        $this->yield = $yield;
    }

    public function getEstimatedCost()
    {
        return $this->estimatedCost;
    }

    public function setEstimatedCost($estimatedCost)
    {
        $this->estimatedCost = $estimatedCost;
    }

    public function getTotalTime()
    {
        return $this->totalTime;
    }

    public function setTotalTime($totalTime)
    {
        $this->totalTime = $totalTime;
    }

    public function getStep()
    {
        return $this->step;
    }

    public function setStep($step)
    {
        $this->step = $step;
    }

    public function getTool()
    {
        return $this->tool;
    }

    public function setTool($tool)
    {
        $this->tool = $tool;
    }
}

