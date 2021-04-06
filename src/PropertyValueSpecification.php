<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A Property value specification.
 */
class PropertyValueSpecification extends Intangible
{
    /**
     * The default value of the input.  For properties that expect a literal, the
     * default is a literal value, for properties that expect an object, it's an ID
     * reference to one of the current values.
     */
    private $defaultValue;

    /**
     * Whether or not a property is mutable.  Default is false. Specifying this for a
     * property that also has a value makes it act similar to a "hidden" input in an
     * HTML form.
     */
    private $readonlyValue;

    /**
     * Whether multiple values are allowed for the property.  Default is false.
     */
    private $multipleValues;

    /**
     * Specifies the allowed range for number of characters in a literal value.
     */
    private $valueMaxLength;

    /**
     * Whether the property must be filled in to complete the action.  Default is
     * false.
     */
    private $valueRequired;

    /**
     * Specifies the minimum allowed range for number of characters in a literal value.
     */
    private $valueMinLength;

    /**
     * The stepValue attribute indicates the granularity that is expected (and
     * required) of the value in a PropertyValueSpecification.
     */
    private $stepValue;

    /**
     * Indicates the name of the PropertyValueSpecification to be used in URL templates
     * and form encoding in a manner analogous to HTML's input@name.
     */
    private $valueName;

    /**
     * Specifies a regular expression for testing literal values according to the HTML
     * spec.
     */
    private $valuePattern;

    public function getDefaultValue()
    {
        return $this->defaultValue;
    }

    public function setDefaultValue($defaultValue)
    {
        $this->defaultValue = $defaultValue;
    }

    public function getReadonlyValue()
    {
        return $this->readonlyValue;
    }

    public function setReadonlyValue($readonlyValue)
    {
        $this->readonlyValue = $readonlyValue;
    }

    public function getMultipleValues()
    {
        return $this->multipleValues;
    }

    public function setMultipleValues($multipleValues)
    {
        $this->multipleValues = $multipleValues;
    }

    public function getValueMaxLength()
    {
        return $this->valueMaxLength;
    }

    public function setValueMaxLength($valueMaxLength)
    {
        $this->valueMaxLength = $valueMaxLength;
    }

    public function getValueRequired()
    {
        return $this->valueRequired;
    }

    public function setValueRequired($valueRequired)
    {
        $this->valueRequired = $valueRequired;
    }

    public function getValueMinLength()
    {
        return $this->valueMinLength;
    }

    public function setValueMinLength($valueMinLength)
    {
        $this->valueMinLength = $valueMinLength;
    }

    public function getStepValue()
    {
        return $this->stepValue;
    }

    public function setStepValue($stepValue)
    {
        $this->stepValue = $stepValue;
    }

    public function getValueName()
    {
        return $this->valueName;
    }

    public function setValueName($valueName)
    {
        $this->valueName = $valueName;
    }

    public function getValuePattern()
    {
        return $this->valuePattern;
    }

    public function setValuePattern($valuePattern)
    {
        $this->valuePattern = $valuePattern;
    }
}

