<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A FloorPlan is an explicit representation of a collection of similar
 * accommodations, allowing the provision of common information (room counts,
 * sizes, layout diagrams) and offers for rental or sale. In typical use, some
 * [[ApartmentComplex]] has an [[accommodationFloorPlan]] which is a [[FloorPlan]].
 *  A FloorPlan is always in the context of a particular place, either a larger
 * [[ApartmentComplex]] or a single [[Apartment]]. The visual/spatial aspects of a
 * floor plan (i.e. room layout, [see
 * wikipedia](https://en.wikipedia.org/wiki/Floor_plan)) can be indicated using
 * [[image]].
 */
class FloorPlan extends Intangible
{
    /**
     * The total integer number of bedrooms in a some [[Accommodation]],
     * [[ApartmentComplex]] or [[FloorPlan]].
     */
    private $numberOfBedrooms;

    /**
     * Indicates the total (available plus unavailable) number of accommodation units
     * in an [[ApartmentComplex]], or the number of accommodation units for a specific
     * [[FloorPlan]] (within its specific [[ApartmentComplex]]). See also
     * [[numberOfAvailableAccommodationUnits]].
     */
    private $numberOfAccommodationUnits;

    /**
     * The total integer number of bathrooms in a some [[Accommodation]], following
     * real estate conventions as [documented in
     * RESO](https://ddwiki.reso.org/display/DDW17/BathroomsTotalInteger+Field): "The
     * simple sum of the number of bathrooms. For example for a property with two Full
     * Bathrooms and one Half Bathroom, the Bathrooms Total Integer will be 3.". See
     * also [[numberOfRooms]].
     */
    private $numberOfBathroomsTotal;

    /**
     * Number of full bathrooms - The total number of full and ¾ bathrooms in an
     * [[Accommodation]]. This corresponds to the [BathroomsFull field in
     * RESO](https://ddwiki.reso.org/display/DDW17/BathroomsFull+Field).
     */
    private $numberOfFullBathrooms;

    /**
     * A schematic image showing the floorplan layout.
     */
    private $layoutImage;

    /**
     * The size of the accommodation, e.g. in square meter or squarefoot.
     * Typical unit code(s): MTK for square meter, FTK for square foot, or YDK for
     * square yard
     */
    private $floorSize;

    /**
     * Indicates some accommodation that this floor plan describes.
     */
    private $isPlanForApartment;

    /**
     * Indicates whether pets are allowed to enter the accommodation or lodging
     * business. More detailed information can be put in a text value.
     */
    private $petsAllowed;

    public function getNumberOfBedrooms()
    {
        return $this->numberOfBedrooms;
    }

    public function setNumberOfBedrooms($numberOfBedrooms)
    {
        $this->numberOfBedrooms = $numberOfBedrooms;
    }

    public function getNumberOfAccommodationUnits()
    {
        return $this->numberOfAccommodationUnits;
    }

    public function setNumberOfAccommodationUnits($numberOfAccommodationUnits)
    {
        $this->numberOfAccommodationUnits = $numberOfAccommodationUnits;
    }

    public function getNumberOfBathroomsTotal()
    {
        return $this->numberOfBathroomsTotal;
    }

    public function setNumberOfBathroomsTotal($numberOfBathroomsTotal)
    {
        $this->numberOfBathroomsTotal = $numberOfBathroomsTotal;
    }

    public function getNumberOfFullBathrooms()
    {
        return $this->numberOfFullBathrooms;
    }

    public function setNumberOfFullBathrooms($numberOfFullBathrooms)
    {
        $this->numberOfFullBathrooms = $numberOfFullBathrooms;
    }

    public function getLayoutImage()
    {
        return $this->layoutImage;
    }

    public function setLayoutImage($layoutImage)
    {
        $this->layoutImage = $layoutImage;
    }

    public function getFloorSize()
    {
        return $this->floorSize;
    }

    public function setFloorSize($floorSize)
    {
        $this->floorSize = $floorSize;
    }

    public function getIsPlanForApartment()
    {
        return $this->isPlanForApartment;
    }

    public function setIsPlanForApartment($isPlanForApartment)
    {
        $this->isPlanForApartment = $isPlanForApartment;
    }

    public function getPetsAllowed()
    {
        return $this->petsAllowed;
    }

    public function setPetsAllowed($petsAllowed)
    {
        $this->petsAllowed = $petsAllowed;
    }
}

