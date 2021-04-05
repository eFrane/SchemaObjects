<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A PerformanceRole is a Role that some entity places with regard to a theatrical
 * performance, e.g. in a Movie, TVSeries etc.
 */
class PerformanceRole extends Role
{
    /**
     * The name of a character played in some acting or performing role, i.e. in a
     * PerformanceRole.
     */
    private $characterName;

    public function getCharacterName()
    {
        return $this->characterName;
    }

    public function setCharacterName($characterName)
    {
        $this->characterName = $characterName;
    }
}

