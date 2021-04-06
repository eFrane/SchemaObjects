<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A bus (also omnibus or autobus) is a road vehicle designed to carry passengers.
 * Coaches are luxury busses, usually in service for long distance travel.
 */
class BusOrCoach extends Vehicle
{
    /**
     * The permitted total weight of cargo and installations (e.g. a roof rack) on top
     * of the vehicle.
     *
     * Typical unit code(s): KGM for kilogram, LBR for pound
     *
     * * Note 1: You can indicate additional information in the [[name]] of the
     * [[QuantitativeValue]] node.
     * * Note 2: You may also link to a [[QualitativeValue]] node that provides
     * additional information using [[valueReference]]
     * * Note 3: Note that you can use [[minValue]] and [[maxValue]] to indicate
     * ranges.
     */
    private $roofLoad;

    /**
     * The ACRISS Car Classification Code is a code used by many car rental companies,
     * for classifying vehicles. ACRISS stands for Association of Car Rental Industry
     * Systems and Standards.
     */
    private $acrissCode;

    public function getRoofLoad()
    {
        return $this->roofLoad;
    }

    public function setRoofLoad($roofLoad)
    {
        $this->roofLoad = $roofLoad;
    }

    public function getAcrissCode()
    {
        return $this->acrissCode;
    }

    public function setAcrissCode($acrissCode)
    {
        $this->acrissCode = $acrissCode;
    }
}

