<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A set of characteristics describing parents, who can be interested in viewing
 * some content.
 */
class ParentAudience extends PeopleAudience
{
    /**
     * Maximal age of the child.
     */
    private $childMaxAge;

    /**
     * Minimal age of the child.
     */
    private $childMinAge;

    public function getChildMaxAge()
    {
        return $this->childMaxAge;
    }

    public function setChildMaxAge($childMaxAge)
    {
        $this->childMaxAge = $childMaxAge;
    }

    public function getChildMinAge()
    {
        return $this->childMinAge;
    }

    public function setChildMinAge($childMinAge)
    {
        $this->childMinAge = $childMinAge;
    }
}

