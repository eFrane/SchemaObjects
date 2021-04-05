<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A StatisticalPopulation is a set of instances of a certain given type that
 * satisfy some set of constraints. The property [[populationType]] is used to
 * specify the type. Any property that can be used on instances of that type can
 * appear on the statistical population. For example, a [[StatisticalPopulation]]
 * representing all [[Person]]s with a [[homeLocation]] of East Podunk California,
 * would be described by applying the appropriate [[homeLocation]] and
 * [[populationType]] properties to a [[StatisticalPopulation]] item that stands
 * for that set of people.
 * The properties [[numConstraints]] and [[constrainingProperty]] are used to
 * specify which of the populations properties are used to specify the population.
 * Note that the sense of "population" used here is the general sense of a
 * statistical
 * population, and does not imply that the population consists of people. For
 * example, a [[populationType]] of [[Event]] or [[NewsArticle]] could be used. See
 * also [[Observation]], and the [data and datasets](/docs/data-and-datasets.html)
 * overview for more details.
 */
class StatisticalPopulation extends Intangible
{
    /**
     * Indicates the populationType common to all members of a
     * [[StatisticalPopulation]].
     */
    private $populationType;

    /**
     * Indicates the number of constraints (not counting [[populationType]]) defined
     * for a particular [[StatisticalPopulation]]. This helps applications understand
     * if they have access to a sufficiently complete description of a
     * [[StatisticalPopulation]].
     */
    private $numConstraints;

    /**
     * Indicates a property used as a constraint to define a [[StatisticalPopulation]]
     * with respect to the set of entities
     *   corresponding to an indicated type (via [[populationType]]).
     */
    private $constrainingProperty;

    public function getPopulationType()
    {
        return $this->populationType;
    }

    public function setPopulationType($populationType)
    {
        $this->populationType = $populationType;
    }

    public function getNumConstraints()
    {
        return $this->numConstraints;
    }

    public function setNumConstraints($numConstraints)
    {
        $this->numConstraints = $numConstraints;
    }

    public function getConstrainingProperty()
    {
        return $this->constrainingProperty;
    }

    public function setConstrainingProperty($constrainingProperty)
    {
        $this->constrainingProperty = $constrainingProperty;
    }
}

