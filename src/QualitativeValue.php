<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A predefined value for a product characteristic, e.g. the power cord plug type
 * 'US' or the garment sizes 'S', 'M', 'L', and 'XL'.
 */
class QualitativeValue extends Enumeration
{
    /**
     * A property-value pair representing an additional characteristics of the
     * entitity, e.g. a product feature or another characteristic for which there is no
     * matching property in schema.org.
     *
     * Note: Publishers should be aware that applications designed to use specific
     * schema.org properties (e.g. https://schema.org/width, https://schema.org/color,
     * https://schema.org/gtin13, ...) will typically expect such data to be provided
     * using those properties, rather than using the generic property/value mechanism.
     */
    private $additionalProperty;

    /**
     * This ordering relation for qualitative values indicates that the subject is
     * lesser than or equal to the object.
     */
    private $lesserOrEqual;

    /**
     * This ordering relation for qualitative values indicates that the subject is
     * equal to the object.
     */
    private $equal;

    /**
     * This ordering relation for qualitative values indicates that the subject is not
     * equal to the object.
     */
    private $nonEqual;

    /**
     * This ordering relation for qualitative values indicates that the subject is
     * greater than the object.
     */
    private $greater;

    /**
     * This ordering relation for qualitative values indicates that the subject is
     * greater than or equal to the object.
     */
    private $greaterOrEqual;

    /**
     * This ordering relation for qualitative values indicates that the subject is
     * lesser than the object.
     */
    private $lesser;

    public function getAdditionalProperty()
    {
        return $this->additionalProperty;
    }

    public function setAdditionalProperty($additionalProperty)
    {
        $this->additionalProperty = $additionalProperty;
    }

    public function getLesserOrEqual()
    {
        return $this->lesserOrEqual;
    }

    public function setLesserOrEqual($lesserOrEqual)
    {
        $this->lesserOrEqual = $lesserOrEqual;
    }

    public function getEqual()
    {
        return $this->equal;
    }

    public function setEqual($equal)
    {
        $this->equal = $equal;
    }

    public function getNonEqual()
    {
        return $this->nonEqual;
    }

    public function setNonEqual($nonEqual)
    {
        $this->nonEqual = $nonEqual;
    }

    public function getGreater()
    {
        return $this->greater;
    }

    public function setGreater($greater)
    {
        $this->greater = $greater;
    }

    public function getGreaterOrEqual()
    {
        return $this->greaterOrEqual;
    }

    public function setGreaterOrEqual($greaterOrEqual)
    {
        $this->greaterOrEqual = $greaterOrEqual;
    }

    public function getLesser()
    {
        return $this->lesser;
    }

    public function setLesser($lesser)
    {
        $this->lesser = $lesser;
    }
}

