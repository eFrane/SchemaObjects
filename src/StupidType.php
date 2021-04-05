<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A StupidType for testing.
 */
class StupidType extends Thing
{
    /**
     * This is a StupidProperty! - for testing only
     */
    private $stupidProperty;

    public function getStupidProperty()
    {
        return $this->stupidProperty;
    }

    public function setStupidProperty($stupidProperty)
    {
        $this->stupidProperty = $stupidProperty;
    }
}

