<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A trip or journey. An itinerary of visits to one or more places.
 */
class Trip extends Intangible
{
    /**
     * The expected arrival time.
     */
    private $arrivalTime;

    /**
     * Destination(s) ( [[Place]] ) that make up a trip. For a trip where destination
     * order is important use [[ItemList]] to specify that order (see examples).
     */
    private $itinerary;

    /**
     * The expected departure time.
     */
    private $departureTime;

    /**
     * An offer to provide this item&#x2014;for example, an offer to sell a product,
     * rent the DVD of a movie, perform a service, or give away tickets to an event.
     * Use [[businessFunction]] to indicate the kind of transaction offered, i.e. sell,
     * lease, etc. This property can also be used to describe a [[Demand]]. While this
     * property is listed as expected on a number of common types, it can be used in
     * others. In that case, using a second type, such as Product or a subtype of
     * Product, can clarify the nature of the offer.
     */
    private $offers;

    /**
     * Identifies a [[Trip]] that is a subTrip of this Trip.  For example Day 1, Day 2,
     * etc. of a multi-day trip.
     */
    private $subTrip;

    /**
     * Identifies that this [[Trip]] is a subTrip of another Trip.  For example Day 1,
     * Day 2, etc. of a multi-day trip.
     */
    private $partOfTrip;

    public function getArrivalTime()
    {
        return $this->arrivalTime;
    }

    public function setArrivalTime($arrivalTime)
    {
        $this->arrivalTime = $arrivalTime;
    }

    public function getItinerary()
    {
        return $this->itinerary;
    }

    public function setItinerary($itinerary)
    {
        $this->itinerary = $itinerary;
    }

    public function getDepartureTime()
    {
        return $this->departureTime;
    }

    public function setDepartureTime($departureTime)
    {
        $this->departureTime = $departureTime;
    }

    public function getOffers()
    {
        return $this->offers;
    }

    public function setOffers($offers)
    {
        $this->offers = $offers;
    }

    public function getSubTrip()
    {
        return $this->subTrip;
    }

    public function setSubTrip($subTrip)
    {
        $this->subTrip = $subTrip;
    }

    public function getPartOfTrip()
    {
        return $this->partOfTrip;
    }

    public function setPartOfTrip($partOfTrip)
    {
        $this->partOfTrip = $partOfTrip;
    }
}

