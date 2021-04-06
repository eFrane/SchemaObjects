<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A sub-grouping of steps in the instructions for how to achieve a result (e.g.
 * steps for making a pie crust within a pie recipe).
 */
class HowToSection extends ItemList
{
    /**
     * A single step item (as HowToStep, text, document, video, etc.) or a HowToSection
     * (originally misnamed 'steps'; 'step' is preferred).
     */
    private $steps;

    public function getSteps()
    {
        return $this->steps;
    }

    public function setSteps($steps)
    {
        $this->steps = $steps;
    }
}

