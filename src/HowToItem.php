<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * An item used as either a tool or supply when performing the instructions for how
 * to to achieve a result.
 */
class HowToItem extends ListItem
{
    /**
     * The required quantity of the item(s).
     */
    private $requiredQuantity;

    public function getRequiredQuantity()
    {
        return $this->requiredQuantity;
    }

    public function setRequiredQuantity($requiredQuantity)
    {
        $this->requiredQuantity = $requiredQuantity;
    }
}

