<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * Information about the engine of the vehicle. A vehicle can have multiple engines
 * represented by multiple engine specification entities.
 */
class EngineSpecification extends StructuredValue
{
    /**
     * The torque (turning force) of the vehicle's engine.
     *
     * Typical unit code(s): NU for newton metre (N m), F17 for pound-force per foot,
     * or F48 for pound-force per inch
     *
     * * Note 1: You can link to information about how the given value has been
     * determined (e.g. reference RPM) using the [[valueReference]] property.
     * * Note 2: You can use [[minValue]] and [[maxValue]] to indicate ranges.
     */
    private $torque;

    /**
     * The type of engine or engines powering the vehicle.
     */
    private $engineType;

    /**
     * The power of the vehicle's engine.
     *     Typical unit code(s): KWT for kilowatt, BHP for brake horsepower, N12 for
     * metric horsepower (PS, with 1 PS = 735,49875 W)
     *
     * * Note 1: There are many different ways of measuring an engine's power. For an
     * overview, see 
     * [http://en.wikipedia.org/wiki/Horsepower#Engine_power_test_codes](http://en.wikipedia.org/wiki/Horsepower#Engine_power_test_codes).
     * * Note 2: You can link to information about how the given value has been
     * determined using the [[valueReference]] property.
     * * Note 3: You can use [[minValue]] and [[maxValue]] to indicate ranges.
     */
    private $enginePower;

    /**
     * The volume swept by all of the pistons inside the cylinders of an internal
     * combustion engine in a single movement. 
     *
     * Typical unit code(s): CMQ for cubic centimeter, LTR for liters, INQ for cubic
     * inches
     * * Note 1: You can link to information about how the given value has been
     * determined using the [[valueReference]] property.
     * * Note 2: You can use [[minValue]] and [[maxValue]] to indicate ranges.
     */
    private $engineDisplacement;

    public function getTorque()
    {
        return $this->torque;
    }

    public function setTorque($torque)
    {
        $this->torque = $torque;
    }

    public function getEngineType()
    {
        return $this->engineType;
    }

    public function setEngineType($engineType)
    {
        $this->engineType = $engineType;
    }

    public function getEnginePower()
    {
        return $this->enginePower;
    }

    public function setEnginePower($enginePower)
    {
        $this->enginePower = $enginePower;
    }

    public function getEngineDisplacement()
    {
        return $this->engineDisplacement;
    }

    public function setEngineDisplacement($engineDisplacement)
    {
        $this->engineDisplacement = $engineDisplacement;
    }
}

