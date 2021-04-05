<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * Size related properties of a product, typically a size code ([[name]]) and
 * optionally a [[sizeSystem]], [[sizeGroup]], and product measurements
 * ([[hasMeasurement]]). In addition, the intended audience can be defined through
 * [[suggestedAge]], [[suggestedGender]], and suggested body measurements
 * ([[suggestedMeasurement]]).
 */
class SizeSpecification extends QualitativeValue
{
    /**
     * A suggested range of body measurements for the intended audience or person, for
     * example inseam between 32 and 34 inches or height between 170 and 190 cm.
     * Typically found on a size chart for wearable products.
     */
    private $suggestedMeasurement;

    /**
     * The size group (also known as "size type") for a product's size. Size groups are
     * common in the fashion industry to define size segments and suggested audiences
     * for wearable products. Multiple values can be combined, for example "men's big
     * and tall", "petite maternity" or "regular"
     */
    private $sizeGroup;

    /**
     * The size system used to identify a product's size. Typically either a standard
     * (for example, "GS1" or "ISO-EN13402"), country code (for example "US" or "JP"),
     * or a measuring system (for example "Metric" or "Imperial").
     */
    private $sizeSystem;

    /**
     * The age or age range for the intended audience or person, for example 3-12
     * months for infants, 1-5 years for toddlers.
     */
    private $suggestedAge;

    public function getSuggestedMeasurement()
    {
        return $this->suggestedMeasurement;
    }

    public function setSuggestedMeasurement($suggestedMeasurement)
    {
        $this->suggestedMeasurement = $suggestedMeasurement;
    }

    public function getSizeGroup()
    {
        return $this->sizeGroup;
    }

    public function setSizeGroup($sizeGroup)
    {
        $this->sizeGroup = $sizeGroup;
    }

    public function getSizeSystem()
    {
        return $this->sizeSystem;
    }

    public function setSizeSystem($sizeSystem)
    {
        $this->sizeSystem = $sizeSystem;
    }

    public function getSuggestedAge()
    {
        return $this->suggestedAge;
    }

    public function setSuggestedAge($suggestedAge)
    {
        $this->suggestedAge = $suggestedAge;
    }
}

