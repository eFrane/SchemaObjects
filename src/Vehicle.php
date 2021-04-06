<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A vehicle is a device that is designed or used to transport people or cargo over
 * land, water, air, or through space.
 */
class Vehicle extends Product
{
    /**
     * The type of component used for transmitting the power from a rotating power
     * source to the wheels or other relevant component(s) ("gearbox" for cars).
     */
    private $vehicleTransmission;

    /**
     * The position of the steering wheel or similar device (mostly for cars).
     */
    private $steeringPosition;

    /**
     * The Vehicle Identification Number (VIN) is a unique serial number used by the
     * automotive industry to identify individual motor vehicles.
     */
    private $vehicleIdentificationNumber;

    /**
     * Indicates that the vehicle meets the respective emission standard.
     */
    private $meetsEmissionStandard;

    /**
     * The number of doors.
     *
     * Typical unit code(s): C62
     */
    private $numberOfDoors;

    /**
     * The distance traveled per unit of fuel used; most commonly miles per gallon
     * (mpg) or kilometers per liter (km/L).
     *
     * * Note 1: There are unfortunately no standard unit codes for miles per gallon or
     * kilometers per liter. Use [[unitText]] to indicate the unit of measurement, e.g.
     * mpg or km/L.
     * * Note 2: There are two ways of indicating the fuel consumption,
     * [[fuelConsumption]] (e.g. 8 liters per 100 km) and [[fuelEfficiency]] (e.g. 30
     * miles per gallon). They are reciprocal.
     * * Note 3: Often, the absolute value is useful only when related to driving speed
     * ("at 80 km/h") or usage pattern ("city traffic"). You can use [[valueReference]]
     * to link the value for the fuel economy to another value.
     */
    private $fuelEfficiency;

    /**
     * The capacity of the fuel tank or in the case of electric cars, the battery. If
     * there are multiple components for storage, this should indicate the total of all
     * storage of the same type.
     *
     * Typical unit code(s): LTR for liters, GLL of US gallons, GLI for UK / imperial
     * gallons, AMH for ampere-hours (for electrical vehicles).
     */
    private $fuelCapacity;

    /**
     * The number of axles.
     *
     * Typical unit code(s): C62
     */
    private $numberOfAxles;

    /**
     * Indicates the design and body style of the vehicle (e.g. station wagon,
     * hatchback, etc.).
     */
    private $bodyType;

    /**
     * A short text indicating the configuration of the vehicle, e.g. '5dr hatchback ST
     * 2.5 MT 225 hp' or 'limited edition'.
     */
    private $vehicleConfiguration;

    /**
     * The permitted vertical load (TWR) of a trailer attached to the vehicle. Also
     * referred to as Tongue Load Rating (TLR) or Vertical Load Rating (VLR)
     *
     * Typical unit code(s): KGM for kilogram, LBR for pound
     *
     * * Note 1: You can indicate additional information in the [[name]] of the
     * [[QuantitativeValue]] node.
     * * Note 2: You may also link to a [[QualitativeValue]] node that provides
     * additional information using [[valueReference]].
     * * Note 3: Note that you can use [[minValue]] and [[maxValue]] to indicate
     * ranges.
     */
    private $tongueWeight;

    /**
     * The available volume for cargo or luggage. For automobiles, this is usually the
     * trunk volume.
     *
     * Typical unit code(s): LTR for liters, FTQ for cubic foot/feet
     *
     * Note: You can use [[minValue]] and [[maxValue]] to indicate ranges.
     */
    private $cargoVolume;

    /**
     * A [callsign](https://en.wikipedia.org/wiki/Call_sign), as used in broadcasting
     * and radio communications to identify people, radio and TV stations, or vehicles.
     */
    private $callSign;

    /**
     * A textual description of known damages, both repaired and unrepaired.
     */
    private $knownVehicleDamages;

    /**
     * The amount of fuel consumed for traveling a particular distance or temporal
     * duration with the given vehicle (e.g. liters per 100 km).
     *
     * * Note 1: There are unfortunately no standard unit codes for liters per 100 km. 
     * Use [[unitText]] to indicate the unit of measurement, e.g. L/100 km.
     * * Note 2: There are two ways of indicating the fuel consumption,
     * [[fuelConsumption]] (e.g. 8 liters per 100 km) and [[fuelEfficiency]] (e.g. 30
     * miles per gallon). They are reciprocal.
     * * Note 3: Often, the absolute value is useful only when related to driving speed
     * ("at 80 km/h") or usage pattern ("city traffic"). You can use [[valueReference]]
     * to link the value for the fuel consumption to another value.
     */
    private $fuelConsumption;

    /**
     * The permitted weight of passengers and cargo, EXCLUDING the weight of the empty
     * vehicle.
     *
     * Typical unit code(s): KGM for kilogram, LBR for pound
     *
     * * Note 1: Many databases specify the permitted TOTAL weight instead, which is
     * the sum of [[weight]] and [[payload]]
     * * Note 2: You can indicate additional information in the [[name]] of the
     * [[QuantitativeValue]] node.
     * * Note 3: You may also link to a [[QualitativeValue]] node that provides
     * additional information using [[valueReference]].
     * * Note 4: Note that you can use [[minValue]] and [[maxValue]] to indicate
     * ranges.
     */
    private $payload;

    /**
     * The CO2 emissions in g/km. When used in combination with a QuantitativeValue,
     * put "g/km" into the unitText property of that value, since there is no UN/CEFACT
     * Common Code for "g/km".
     */
    private $emissionsCO2;

    /**
     * The permitted total weight of the loaded vehicle, including passengers and cargo
     * and the weight of the empty vehicle.
     *
     * Typical unit code(s): KGM for kilogram, LBR for pound
     *
     * * Note 1: You can indicate additional information in the [[name]] of the
     * [[QuantitativeValue]] node.
     * * Note 2: You may also link to a [[QualitativeValue]] node that provides
     * additional information using [[valueReference]].
     * * Note 3: Note that you can use [[minValue]] and [[maxValue]] to indicate
     * ranges.
     */
    private $weightTotal;

    /**
     * The release date of a vehicle model (often used to differentiate versions of the
     * same make and model).
     */
    private $vehicleModelDate;

    /**
     * The permitted weight of a trailer attached to the vehicle.
     *
     * Typical unit code(s): KGM for kilogram, LBR for pound
     * * Note 1: You can indicate additional information in the [[name]] of the
     * [[QuantitativeValue]] node.
     * * Note 2: You may also link to a [[QualitativeValue]] node that provides
     * additional information using [[valueReference]].
     * * Note 3: Note that you can use [[minValue]] and [[maxValue]] to indicate
     * ranges.
     */
    private $trailerWeight;

    /**
     * The time needed to accelerate the vehicle from a given start velocity to a given
     * target velocity.
     *
     * Typical unit code(s): SEC for seconds
     *
     * * Note: There are unfortunately no standard unit codes for seconds/0..100 km/h
     * or seconds/0..60 mph. Simply use "SEC" for seconds and indicate the velocities
     * in the [[name]] of the [[QuantitativeValue]], or use [[valueReference]] with a
     * [[QuantitativeValue]] of 0..60 mph or 0..100 km/h to specify the reference
     * speeds.
     */
    private $accelerationTime;

    /**
     * The number of persons that can be seated (e.g. in a vehicle), both in terms of
     * the physical space available, and in terms of limitations set by law.
     *
     * Typical unit code(s): C62 for persons
     */
    private $seatingCapacity;

    /**
     * The color or color combination of the interior of the vehicle.
     */
    private $vehicleInteriorColor;

    /**
     * The drive wheel configuration, i.e. which roadwheels will receive torque from
     * the vehicle's engine via the drivetrain.
     */
    private $driveWheelConfiguration;

    /**
     * The release date of a vehicle model (often used to differentiate versions of the
     * same make and model).
     */
    private $modelDate;

    /**
     * The number or type of airbags in the vehicle.
     */
    private $numberOfAirbags;

    /**
     * The type of fuel suitable for the engine or engines of the vehicle. If the
     * vehicle has only one engine, this property can be attached directly to the
     * vehicle.
     */
    private $fuelType;

    /**
     * Information about the engine or engines of the vehicle.
     */
    private $vehicleEngine;

    /**
     * The date of the first registration of the vehicle with the respective public
     * authorities.
     */
    private $dateVehicleFirstRegistered;

    /**
     * The date of production of the item, e.g. vehicle.
     */
    private $productionDate;

    /**
     * Indicates whether the vehicle has been used for special purposes, like
     * commercial rental, driving school, or as a taxi. The legislation in many
     * countries requires this information to be revealed when offering a car for sale.
     */
    private $vehicleSpecialUsage;

    /**
     * The total distance travelled by the particular vehicle since its initial
     * production, as read from its odometer.
     *
     * Typical unit code(s): KMT for kilometers, SMI for statute miles
     */
    private $mileageFromOdometer;

    /**
     * The type or material of the interior of the vehicle (e.g. synthetic fabric,
     * leather, wood, etc.). While most interior types are characterized by the
     * material used, an interior type can also be based on vehicle usage or target
     * audience.
     */
    private $vehicleInteriorType;

    /**
     * The distance between the centers of the front and rear wheels.
     *
     * Typical unit code(s): CMT for centimeters, MTR for meters, INH for inches, FOT
     * for foot/feet
     */
    private $wheelbase;

    /**
     * The total number of forward gears available for the transmission system of the
     * vehicle.
     *
     * Typical unit code(s): C62
     */
    private $numberOfForwardGears;

    /**
     * The number of owners of the vehicle, including the current one.
     *
     * Typical unit code(s): C62
     */
    private $numberOfPreviousOwners;

    /**
     * The number of passengers that can be seated in the vehicle, both in terms of the
     * physical space available, and in terms of limitations set by law.
     *
     * Typical unit code(s): C62 for persons.
     */
    private $vehicleSeatingCapacity;

    /**
     * The speed range of the vehicle. If the vehicle is powered by an engine, the
     * upper limit of the speed range (indicated by [[maxValue]] should be the maximum
     * speed achievable under regular conditions.
     *
     * Typical unit code(s): KMH for km/h, HM for mile per hour (0.447 04 m/s), KNT for
     * knot
     *
     * *Note 1: Use [[minValue]] and [[maxValue]] to indicate the range. Typically, the
     * minimal value is zero.
     * * Note 2: There are many different ways of measuring the speed range. You can
     * link to information about how the given value has been determined using the
     * [[valueReference]] property.
     */
    private $speed;

    public function getVehicleTransmission()
    {
        return $this->vehicleTransmission;
    }

    public function setVehicleTransmission($vehicleTransmission)
    {
        $this->vehicleTransmission = $vehicleTransmission;
    }

    public function getSteeringPosition()
    {
        return $this->steeringPosition;
    }

    public function setSteeringPosition($steeringPosition)
    {
        $this->steeringPosition = $steeringPosition;
    }

    public function getVehicleIdentificationNumber()
    {
        return $this->vehicleIdentificationNumber;
    }

    public function setVehicleIdentificationNumber($vehicleIdentificationNumber)
    {
        $this->vehicleIdentificationNumber = $vehicleIdentificationNumber;
    }

    public function getMeetsEmissionStandard()
    {
        return $this->meetsEmissionStandard;
    }

    public function setMeetsEmissionStandard($meetsEmissionStandard)
    {
        $this->meetsEmissionStandard = $meetsEmissionStandard;
    }

    public function getNumberOfDoors()
    {
        return $this->numberOfDoors;
    }

    public function setNumberOfDoors($numberOfDoors)
    {
        $this->numberOfDoors = $numberOfDoors;
    }

    public function getFuelEfficiency()
    {
        return $this->fuelEfficiency;
    }

    public function setFuelEfficiency($fuelEfficiency)
    {
        $this->fuelEfficiency = $fuelEfficiency;
    }

    public function getFuelCapacity()
    {
        return $this->fuelCapacity;
    }

    public function setFuelCapacity($fuelCapacity)
    {
        $this->fuelCapacity = $fuelCapacity;
    }

    public function getNumberOfAxles()
    {
        return $this->numberOfAxles;
    }

    public function setNumberOfAxles($numberOfAxles)
    {
        $this->numberOfAxles = $numberOfAxles;
    }

    public function getBodyType()
    {
        return $this->bodyType;
    }

    public function setBodyType($bodyType)
    {
        $this->bodyType = $bodyType;
    }

    public function getVehicleConfiguration()
    {
        return $this->vehicleConfiguration;
    }

    public function setVehicleConfiguration($vehicleConfiguration)
    {
        $this->vehicleConfiguration = $vehicleConfiguration;
    }

    public function getTongueWeight()
    {
        return $this->tongueWeight;
    }

    public function setTongueWeight($tongueWeight)
    {
        $this->tongueWeight = $tongueWeight;
    }

    public function getCargoVolume()
    {
        return $this->cargoVolume;
    }

    public function setCargoVolume($cargoVolume)
    {
        $this->cargoVolume = $cargoVolume;
    }

    public function getCallSign()
    {
        return $this->callSign;
    }

    public function setCallSign($callSign)
    {
        $this->callSign = $callSign;
    }

    public function getKnownVehicleDamages()
    {
        return $this->knownVehicleDamages;
    }

    public function setKnownVehicleDamages($knownVehicleDamages)
    {
        $this->knownVehicleDamages = $knownVehicleDamages;
    }

    public function getFuelConsumption()
    {
        return $this->fuelConsumption;
    }

    public function setFuelConsumption($fuelConsumption)
    {
        $this->fuelConsumption = $fuelConsumption;
    }

    public function getPayload()
    {
        return $this->payload;
    }

    public function setPayload($payload)
    {
        $this->payload = $payload;
    }

    public function getEmissionsCO2()
    {
        return $this->emissionsCO2;
    }

    public function setEmissionsCO2($emissionsCO2)
    {
        $this->emissionsCO2 = $emissionsCO2;
    }

    public function getWeightTotal()
    {
        return $this->weightTotal;
    }

    public function setWeightTotal($weightTotal)
    {
        $this->weightTotal = $weightTotal;
    }

    public function getVehicleModelDate()
    {
        return $this->vehicleModelDate;
    }

    public function setVehicleModelDate($vehicleModelDate)
    {
        $this->vehicleModelDate = $vehicleModelDate;
    }

    public function getTrailerWeight()
    {
        return $this->trailerWeight;
    }

    public function setTrailerWeight($trailerWeight)
    {
        $this->trailerWeight = $trailerWeight;
    }

    public function getAccelerationTime()
    {
        return $this->accelerationTime;
    }

    public function setAccelerationTime($accelerationTime)
    {
        $this->accelerationTime = $accelerationTime;
    }

    public function getSeatingCapacity()
    {
        return $this->seatingCapacity;
    }

    public function setSeatingCapacity($seatingCapacity)
    {
        $this->seatingCapacity = $seatingCapacity;
    }

    public function getVehicleInteriorColor()
    {
        return $this->vehicleInteriorColor;
    }

    public function setVehicleInteriorColor($vehicleInteriorColor)
    {
        $this->vehicleInteriorColor = $vehicleInteriorColor;
    }

    public function getDriveWheelConfiguration()
    {
        return $this->driveWheelConfiguration;
    }

    public function setDriveWheelConfiguration($driveWheelConfiguration)
    {
        $this->driveWheelConfiguration = $driveWheelConfiguration;
    }

    public function getModelDate()
    {
        return $this->modelDate;
    }

    public function setModelDate($modelDate)
    {
        $this->modelDate = $modelDate;
    }

    public function getNumberOfAirbags()
    {
        return $this->numberOfAirbags;
    }

    public function setNumberOfAirbags($numberOfAirbags)
    {
        $this->numberOfAirbags = $numberOfAirbags;
    }

    public function getFuelType()
    {
        return $this->fuelType;
    }

    public function setFuelType($fuelType)
    {
        $this->fuelType = $fuelType;
    }

    public function getVehicleEngine()
    {
        return $this->vehicleEngine;
    }

    public function setVehicleEngine($vehicleEngine)
    {
        $this->vehicleEngine = $vehicleEngine;
    }

    public function getDateVehicleFirstRegistered()
    {
        return $this->dateVehicleFirstRegistered;
    }

    public function setDateVehicleFirstRegistered($dateVehicleFirstRegistered)
    {
        $this->dateVehicleFirstRegistered = $dateVehicleFirstRegistered;
    }

    public function getProductionDate()
    {
        return $this->productionDate;
    }

    public function setProductionDate($productionDate)
    {
        $this->productionDate = $productionDate;
    }

    public function getVehicleSpecialUsage()
    {
        return $this->vehicleSpecialUsage;
    }

    public function setVehicleSpecialUsage($vehicleSpecialUsage)
    {
        $this->vehicleSpecialUsage = $vehicleSpecialUsage;
    }

    public function getMileageFromOdometer()
    {
        return $this->mileageFromOdometer;
    }

    public function setMileageFromOdometer($mileageFromOdometer)
    {
        $this->mileageFromOdometer = $mileageFromOdometer;
    }

    public function getVehicleInteriorType()
    {
        return $this->vehicleInteriorType;
    }

    public function setVehicleInteriorType($vehicleInteriorType)
    {
        $this->vehicleInteriorType = $vehicleInteriorType;
    }

    public function getWheelbase()
    {
        return $this->wheelbase;
    }

    public function setWheelbase($wheelbase)
    {
        $this->wheelbase = $wheelbase;
    }

    public function getNumberOfForwardGears()
    {
        return $this->numberOfForwardGears;
    }

    public function setNumberOfForwardGears($numberOfForwardGears)
    {
        $this->numberOfForwardGears = $numberOfForwardGears;
    }

    public function getNumberOfPreviousOwners()
    {
        return $this->numberOfPreviousOwners;
    }

    public function setNumberOfPreviousOwners($numberOfPreviousOwners)
    {
        $this->numberOfPreviousOwners = $numberOfPreviousOwners;
    }

    public function getVehicleSeatingCapacity()
    {
        return $this->vehicleSeatingCapacity;
    }

    public function setVehicleSeatingCapacity($vehicleSeatingCapacity)
    {
        $this->vehicleSeatingCapacity = $vehicleSeatingCapacity;
    }

    public function getSpeed()
    {
        return $this->speed;
    }

    public function setSpeed($speed)
    {
        $this->speed = $speed;
    }
}

