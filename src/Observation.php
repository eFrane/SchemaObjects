<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * Instances of the class [[Observation]] are used to specify observations about an
 * entity (which may or may not be an instance of a [[StatisticalPopulation]]), at
 * a particular time. The principal properties of an [[Observation]] are
 * [[observedNode]], [[measuredProperty]], [[measuredValue]] (or [[median]], etc.)
 * and [[observationDate]] ([[measuredProperty]] properties can, but need not
 * always, be W3C RDF Data Cube "measure properties", as in the [lifeExpectancy
 * example](https://www.w3.org/TR/vocab-data-cube/#dsd-example)).
 * See also [[StatisticalPopulation]], and the [data and
 * datasets](/docs/data-and-datasets.html) overview for more details.
 */
class Observation extends Intangible
{
    /**
     * The observedNode of an [[Observation]], often a [[StatisticalPopulation]].
     */
    private $observedNode;

    /**
     * The measuredValue of an [[Observation]].
     */
    private $measuredValue;

    /**
     * The observationDate of an [[Observation]].
     */
    private $observationDate;

    /**
     * A marginOfError for an [[Observation]].
     */
    private $marginOfError;

    /**
     * The measuredProperty of an [[Observation]], either a schema.org property, a
     * property from other RDF-compatible systems e.g. W3C RDF Data Cube, or schema.org
     * extensions such as [GS1's](https://www.gs1.org/voc/?show=properties).
     */
    private $measuredProperty;

    public function getObservedNode()
    {
        return $this->observedNode;
    }

    public function setObservedNode($observedNode)
    {
        $this->observedNode = $observedNode;
    }

    public function getMeasuredValue()
    {
        return $this->measuredValue;
    }

    public function setMeasuredValue($measuredValue)
    {
        $this->measuredValue = $measuredValue;
    }

    public function getObservationDate()
    {
        return $this->observationDate;
    }

    public function setObservationDate($observationDate)
    {
        $this->observationDate = $observationDate;
    }

    public function getMarginOfError()
    {
        return $this->marginOfError;
    }

    public function setMarginOfError($marginOfError)
    {
        $this->marginOfError = $marginOfError;
    }

    public function getMeasuredProperty()
    {
        return $this->measuredProperty;
    }

    public function setMeasuredProperty($measuredProperty)
    {
        $this->measuredProperty = $measuredProperty;
    }
}

