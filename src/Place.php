<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * Entities that have a somewhat fixed, physical extension.
 */
class Place extends Thing
{
    /**
     * Represents a relationship between two geometries (or the places they represent),
     * relating a covering geometry to a covered geometry. "Every point of b is a point
     * of (the interior or boundary of) a". As defined in
     * [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
     */
    private $geoCovers;

    /**
     * A flag to signal that the [[Place]] is open to public visitors.  If this
     * property is omitted there is no assumed default boolean value
     */
    private $publicAccess;

    /**
     * A short textual code (also called "store code") that uniquely identifies a place
     * of business. The code is typically assigned by the parentOrganization and used
     * in structured URLs.
     *
     * For example, in the URL http://www.starbucks.co.uk/store-locator/etc/detail/3047
     * the code "3047" is a branchCode for a particular branch.
     */
    private $branchCode;

    /**
     * The special opening hours of a certain place.
     *
     * Use this to explicitly override general opening hours brought in scope by
     * [[openingHoursSpecification]] or [[openingHours]].
     */
    private $specialOpeningHoursSpecification;

    /**
     * Represents spatial relations in which two geometries (or the places they
     * represent) are topologically disjoint: they have no point in common. They form a
     * set of disconnected geometries." (a symmetric relationship, as defined in
     * [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM))
     */
    private $geoDisjoint;

    /**
     * Indicates whether some facility (e.g. [[FoodEstablishment]],
     * [[CovidTestingFacility]]) offers a service that can be used by driving through
     * in a car. In the case of [[CovidTestingFacility]] such facilities could
     * potentially help with social distancing from other potentially-infected users.
     */
    private $hasDriveThroughService;

    /**
     * Represents a relationship between two geometries (or the places they represent),
     * relating a geometry to another that geospatially overlaps it, i.e. they have
     * some but not all points in common. As defined in
     * [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
     */
    private $geoOverlaps;

    /**
     * Represents a relationship between two geometries (or the places they represent),
     * relating a geometry to another that crosses it: "a crosses b: they have some but
     * not all interior points in common, and the dimension of the intersection is less
     * than that of at least one of them". As defined in
     * [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
     */
    private $geoCrosses;

    /**
     * Represents spatial relations in which two geometries (or the places they
     * represent) touch: they have at least one boundary point in common, but no
     * interior points." (a symmetric relationship, as defined in
     * [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM) )
     */
    private $geoTouches;

    /**
     * An amenity feature (e.g. a characteristic or service) of the Accommodation. This
     * generic property does not make a statement about whether the feature is included
     * in an offer for the main accommodation or available at extra costs.
     */
    private $amenityFeature;

    /**
     * The overall rating, based on a collection of reviews or ratings, of the item.
     */
    private $aggregateRating;

    /**
     * A URL to a map of the place.
     */
    private $map;

    /**
     * A URL to a map of the place.
     */
    private $hasMap;

    /**
     * The geo coordinates of the place.
     */
    private $geo;

    /**
     * The latitude of a location. For example ```37.42242``` ([WGS
     * 84](https://en.wikipedia.org/wiki/World_Geodetic_System)).
     */
    private $latitude;

    /**
     * Represents spatial relations in which two geometries (or the places they
     * represent) have at least one point in common. As defined in
     * [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
     */
    private $geoIntersects;

    /**
     * Photographs of this place.
     */
    private $photos;

    /**
     * A photograph of this place.
     */
    private $photo;

    /**
     * Represents spatial relations in which two geometries (or the places they
     * represent) are topologically equal, as defined in
     * [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM). "Two geometries are
     * topologically equal if their interiors intersect and no part of the interior or
     * boundary of one geometry intersects the exterior of the other" (a symmetric
     * relationship)
     */
    private $geoEquals;

    /**
     * A page providing information on how to book a tour of some [[Place]], such as an
     * [[Accommodation]] or [[ApartmentComplex]] in a real estate setting, as well as
     * other kinds of tours as appropriate.
     */
    private $tourBookingPage;

    /**
     * The opening hours of a certain place.
     */
    private $openingHoursSpecification;

    /**
     * Represents a relationship between two geometries (or the places they represent),
     * relating a containing geometry to a contained geometry. "a contains b iff no
     * points of b lie in the exterior of a, and at least one point of the interior of
     * b lies in the interior of a". As defined in
     * [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
     */
    private $geoContains;

    /**
     * Indicates whether it is allowed to smoke in the place, e.g. in the restaurant,
     * hotel or hotel room.
     */
    private $smokingAllowed;

    /**
     * The basic containment relation between a place and one that contains it.
     */
    private $containedIn;

    /**
     * The basic containment relation between a place and one that contains it.
     */
    private $containedInPlace;

    /**
     * A URL to a map of the place.
     */
    private $maps;

    /**
     * Upcoming or past events associated with this place or organization.
     */
    private $events;

    /**
     * The basic containment relation between a place and another that it contains.
     */
    private $containsPlace;

    public function getGeoCovers()
    {
        return $this->geoCovers;
    }

    public function setGeoCovers($geoCovers)
    {
        $this->geoCovers = $geoCovers;
    }

    public function getPublicAccess()
    {
        return $this->publicAccess;
    }

    public function setPublicAccess($publicAccess)
    {
        $this->publicAccess = $publicAccess;
    }

    public function getBranchCode()
    {
        return $this->branchCode;
    }

    public function setBranchCode($branchCode)
    {
        $this->branchCode = $branchCode;
    }

    public function getSpecialOpeningHoursSpecification()
    {
        return $this->specialOpeningHoursSpecification;
    }

    public function setSpecialOpeningHoursSpecification($specialOpeningHoursSpecification)
    {
        $this->specialOpeningHoursSpecification = $specialOpeningHoursSpecification;
    }

    public function getGeoDisjoint()
    {
        return $this->geoDisjoint;
    }

    public function setGeoDisjoint($geoDisjoint)
    {
        $this->geoDisjoint = $geoDisjoint;
    }

    public function getHasDriveThroughService()
    {
        return $this->hasDriveThroughService;
    }

    public function setHasDriveThroughService($hasDriveThroughService)
    {
        $this->hasDriveThroughService = $hasDriveThroughService;
    }

    public function getGeoOverlaps()
    {
        return $this->geoOverlaps;
    }

    public function setGeoOverlaps($geoOverlaps)
    {
        $this->geoOverlaps = $geoOverlaps;
    }

    public function getGeoCrosses()
    {
        return $this->geoCrosses;
    }

    public function setGeoCrosses($geoCrosses)
    {
        $this->geoCrosses = $geoCrosses;
    }

    public function getGeoTouches()
    {
        return $this->geoTouches;
    }

    public function setGeoTouches($geoTouches)
    {
        $this->geoTouches = $geoTouches;
    }

    public function getAmenityFeature()
    {
        return $this->amenityFeature;
    }

    public function setAmenityFeature($amenityFeature)
    {
        $this->amenityFeature = $amenityFeature;
    }

    public function getAggregateRating()
    {
        return $this->aggregateRating;
    }

    public function setAggregateRating($aggregateRating)
    {
        $this->aggregateRating = $aggregateRating;
    }

    public function getMap()
    {
        return $this->map;
    }

    public function setMap($map)
    {
        $this->map = $map;
    }

    public function getHasMap()
    {
        return $this->hasMap;
    }

    public function setHasMap($hasMap)
    {
        $this->hasMap = $hasMap;
    }

    public function getGeo()
    {
        return $this->geo;
    }

    public function setGeo($geo)
    {
        $this->geo = $geo;
    }

    public function getLatitude()
    {
        return $this->latitude;
    }

    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    public function getGeoIntersects()
    {
        return $this->geoIntersects;
    }

    public function setGeoIntersects($geoIntersects)
    {
        $this->geoIntersects = $geoIntersects;
    }

    public function getPhotos()
    {
        return $this->photos;
    }

    public function setPhotos($photos)
    {
        $this->photos = $photos;
    }

    public function getPhoto()
    {
        return $this->photo;
    }

    public function setPhoto($photo)
    {
        $this->photo = $photo;
    }

    public function getGeoEquals()
    {
        return $this->geoEquals;
    }

    public function setGeoEquals($geoEquals)
    {
        $this->geoEquals = $geoEquals;
    }

    public function getTourBookingPage()
    {
        return $this->tourBookingPage;
    }

    public function setTourBookingPage($tourBookingPage)
    {
        $this->tourBookingPage = $tourBookingPage;
    }

    public function getOpeningHoursSpecification()
    {
        return $this->openingHoursSpecification;
    }

    public function setOpeningHoursSpecification($openingHoursSpecification)
    {
        $this->openingHoursSpecification = $openingHoursSpecification;
    }

    public function getGeoContains()
    {
        return $this->geoContains;
    }

    public function setGeoContains($geoContains)
    {
        $this->geoContains = $geoContains;
    }

    public function getSmokingAllowed()
    {
        return $this->smokingAllowed;
    }

    public function setSmokingAllowed($smokingAllowed)
    {
        $this->smokingAllowed = $smokingAllowed;
    }

    public function getContainedIn()
    {
        return $this->containedIn;
    }

    public function setContainedIn($containedIn)
    {
        $this->containedIn = $containedIn;
    }

    public function getContainedInPlace()
    {
        return $this->containedInPlace;
    }

    public function setContainedInPlace($containedInPlace)
    {
        $this->containedInPlace = $containedInPlace;
    }

    public function getMaps()
    {
        return $this->maps;
    }

    public function setMaps($maps)
    {
        $this->maps = $maps;
    }

    public function getEvents()
    {
        return $this->events;
    }

    public function setEvents($events)
    {
        $this->events = $events;
    }

    public function getContainsPlace()
    {
        return $this->containsPlace;
    }

    public function setContainsPlace($containsPlace)
    {
        $this->containsPlace = $containsPlace;
    }
}

