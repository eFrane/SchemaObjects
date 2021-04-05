<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * The act of ingesting information/resources/food.
 */
class ConsumeAction extends Action
{
    /**
     * A set of requirements that a must be fulfilled in order to perform an Action. If
     * more than one value is specied, fulfilling one set of requirements will allow
     * the Action to be performed.
     */
    private $actionAccessibilityRequirement;

    public function getActionAccessibilityRequirement()
    {
        return $this->actionAccessibilityRequirement;
    }

    public function setActionAccessibilityRequirement($actionAccessibilityRequirement)
    {
        $this->actionAccessibilityRequirement = $actionAccessibilityRequirement;
    }
}

