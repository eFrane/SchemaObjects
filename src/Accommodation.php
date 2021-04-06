<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * An accommodation is a place that can accommodate human beings, e.g. a hotel
 * room, a camping pitch, or a meeting room. Many accommodations are for overnight
 * stays, but this is not a mandatory requirement.
 * For more specific types of accommodations not defined in schema.org, one can use
 * additionalType with external vocabularies.
 * <br /><br />
 * See also the <a href="/docs/hotels.html">dedicated document on the use of
 * schema.org for marking up hotels and other forms of accommodations</a>.
 */
class Accommodation extends Place
{
    /**
     * Number of partial bathrooms - The total number of half and ¼ bathrooms in an
     * [[Accommodation]]. This corresponds to the [BathroomsPartial field in
     * RESO](https://ddwiki.reso.org/display/DDW17/BathroomsPartial+Field).
     */
    private $numberOfPartialBathrooms;

    /**
     * The floor level for an [[Accommodation]] in a multi-storey building. Since
     * counting
     *   systems [vary
     * internationally](https://en.wikipedia.org/wiki/Storey#Consecutive_number_floor_designations),
     * the local system should be used where possible.
     */
    private $floorLevel;

    /**
     * Indications regarding the permitted usage of the accommodation.
     */
    private $permittedUsage;

    /**
     * Category of an [[Accommodation]], following real estate conventions e.g. RESO
     * (see
     * [PropertySubType](https://ddwiki.reso.org/display/DDW17/PropertySubType+Field),
     * and [PropertyType](https://ddwiki.reso.org/display/DDW17/PropertyType+Field)
     * fields  for suggested values).
     */
    private $accommodationCategory;

    /**
     * The year an [[Accommodation]] was constructed. This corresponds to the
     * [YearBuilt field in
     * RESO](https://ddwiki.reso.org/display/DDW17/YearBuilt+Field).
     */
    private $yearBuilt;

    /**
     * A floorplan of some [[Accommodation]].
     */
    private $accommodationFloorPlan;

    public function getNumberOfPartialBathrooms()
    {
        return $this->numberOfPartialBathrooms;
    }

    public function setNumberOfPartialBathrooms($numberOfPartialBathrooms)
    {
        $this->numberOfPartialBathrooms = $numberOfPartialBathrooms;
    }

    public function getFloorLevel()
    {
        return $this->floorLevel;
    }

    public function setFloorLevel($floorLevel)
    {
        $this->floorLevel = $floorLevel;
    }

    public function getPermittedUsage()
    {
        return $this->permittedUsage;
    }

    public function setPermittedUsage($permittedUsage)
    {
        $this->permittedUsage = $permittedUsage;
    }

    public function getAccommodationCategory()
    {
        return $this->accommodationCategory;
    }

    public function setAccommodationCategory($accommodationCategory)
    {
        $this->accommodationCategory = $accommodationCategory;
    }

    public function getYearBuilt()
    {
        return $this->yearBuilt;
    }

    public function setYearBuilt($yearBuilt)
    {
        $this->yearBuilt = $yearBuilt;
    }

    public function getAccommodationFloorPlan()
    {
        return $this->accommodationFloorPlan;
    }

    public function setAccommodationFloorPlan($accommodationFloorPlan)
    {
        $this->accommodationFloorPlan = $accommodationFloorPlan;
    }
}

