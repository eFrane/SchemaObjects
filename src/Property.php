<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A property, used to indicate attributes and relationships of some Thing;
 * equivalent to rdf:Property.
 */
class Property extends Intangible
{
    /**
     * Relates a term (i.e. a property, class or enumeration) to one that supersedes
     * it.
     */
    private $supersededBy;

    /**
     * Relates a property to a class that is (one of) the type(s) the property is
     * expected to be used on.
     */
    private $domainIncludes;

    /**
     * Relates a property to a property that is its inverse. Inverse properties relate
     * the same pairs of items to each other, but in reversed direction. For example,
     * the 'alumni' and 'alumniOf' properties are inverseOf each other. Some properties
     * don't have explicit inverses; in these situations RDFa and JSON-LD syntax for
     * reverse properties can be used.
     */
    private $inverseOf;

    /**
     * Relates a property to a class that constitutes (one of) the expected type(s) for
     * values of the property.
     */
    private $rangeIncludes;

    public function getSupersededBy()
    {
        return $this->supersededBy;
    }

    public function setSupersededBy($supersededBy)
    {
        $this->supersededBy = $supersededBy;
    }

    public function getDomainIncludes()
    {
        return $this->domainIncludes;
    }

    public function setDomainIncludes($domainIncludes)
    {
        $this->domainIncludes = $domainIncludes;
    }

    public function getInverseOf()
    {
        return $this->inverseOf;
    }

    public function setInverseOf($inverseOf)
    {
        $this->inverseOf = $inverseOf;
    }

    public function getRangeIncludes()
    {
        return $this->rangeIncludes;
    }

    public function setRangeIncludes($rangeIncludes)
    {
        $this->rangeIncludes = $rangeIncludes;
    }
}

