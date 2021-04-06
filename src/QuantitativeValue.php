<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A point value or interval for product characteristics and other purposes.
 */
class QuantitativeValue extends StructuredValue
{
    /**
     * A secondary value that provides additional information on the original value,
     * e.g. a reference temperature or a type of measurement.
     */
    private $valueReference;

    /**
     * The lower value of some characteristic or property.
     */
    private $minValue;

    /**
     * The value of the quantitative value or property value node.
     *
     * * For [[QuantitativeValue]] and [[MonetaryAmount]], the recommended type for
     * values is 'Number'.
     * * For [[PropertyValue]], it can be 'Text;', 'Number', 'Boolean', or
     * 'StructuredValue'.
     * * Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE'
     * (U+0039)) rather than superficially similiar Unicode symbols.
     * * Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal
     * point. Avoid using these symbols as a readability separator.
     */
    private $value;

    /**
     * The upper value of some characteristic or property.
     */
    private $maxValue;

    public function getValueReference()
    {
        return $this->valueReference;
    }

    public function setValueReference($valueReference)
    {
        $this->valueReference = $valueReference;
    }

    public function getMinValue()
    {
        return $this->minValue;
    }

    public function setMinValue($minValue)
    {
        $this->minValue = $minValue;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setValue($value)
    {
        $this->value = $value;
    }

    public function getMaxValue()
    {
        return $this->maxValue;
    }

    public function setMaxValue($maxValue)
    {
        $this->maxValue = $maxValue;
    }
}

