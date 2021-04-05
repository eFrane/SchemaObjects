<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A property-value pair, e.g. representing a feature of a product or place. Use
 * the 'name' property for the name of the property. If there is an additional
 * human-readable version of the value, put that into the 'description' property.
 *
 *  Always use specific schema.org properties when a) they exist and b) you can
 * populate them. Using PropertyValue as a substitute will typically not trigger
 * the same effect as using the original, specific property.
 */
class PropertyValue extends StructuredValue
{
    /**
     * A commonly used identifier for the characteristic represented by the property,
     * e.g. a manufacturer or a standard code for a property. propertyID can be
     * (1) a prefixed string, mainly meant to be used with standards for product
     * properties; (2) a site-specific, non-prefixed string (e.g. the primary key of
     * the property or the vendor-specific id of the property), or (3)
     * a URL indicating the type of the property, either pointing to an external
     * vocabulary, or a Web resource that describes the property (e.g. a glossary
     * entry).
     * Standards bodies should promote a standard prefix for the identifiers of
     * properties from their standards.
     */
    private $propertyID;

    /**
     * A technique or technology used in a [[Dataset]] (or [[DataDownload]],
     * [[DataCatalog]]),
     * corresponding to the method used for measuring the corresponding variable(s)
     * (described using [[variableMeasured]]). This is oriented towards scientific and
     * scholarly dataset publication but may have broader applicability; it is not
     * intended as a full representation of measurement, but rather as a high level
     * summary for dataset discovery.
     *
     * For example, if [[variableMeasured]] is: molecule concentration,
     * [[measurementTechnique]] could be: "mass spectrometry" or "nmr spectroscopy" or
     * "colorimetry" or "immunofluorescence".
     *
     * If the [[variableMeasured]] is "depression rating", the [[measurementTechnique]]
     * could be "Zung Scale" or "HAM-D" or "Beck Depression Inventory".
     *
     * If there are several [[variableMeasured]] properties recorded for some given
     * data object, use a [[PropertyValue]] for each [[variableMeasured]] and attach
     * the corresponding [[measurementTechnique]].
     */
    private $measurementTechnique;

    /**
     * A string or text indicating the unit of measurement. Useful if you cannot
     * provide a standard unit code for
     * <a href='unitCode'>unitCode</a>.
     */
    private $unitText;

    public function getPropertyID()
    {
        return $this->propertyID;
    }

    public function setPropertyID($propertyID)
    {
        $this->propertyID = $propertyID;
    }

    public function getMeasurementTechnique()
    {
        return $this->measurementTechnique;
    }

    public function setMeasurementTechnique($measurementTechnique)
    {
        $this->measurementTechnique = $measurementTechnique;
    }

    public function getUnitText()
    {
        return $this->unitText;
    }

    public function setUnitText($unitText)
    {
        $this->unitText = $unitText;
    }
}

