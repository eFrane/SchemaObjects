<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A structured value providing information about the opening hours of a place or a
 * certain service inside a place.
 *
 *
 * The place is __open__ if the [[opens]] property is specified, and __closed__
 * otherwise.
 *
 * If the value for the [[closes]] property is less than the value for the
 * [[opens]] property then the hour range is assumed to span over the next day.
 */
class OpeningHoursSpecification extends StructuredValue
{
    /**
     * The day of the week for which these opening hours are valid.
     */
    private $dayOfWeek;

    /**
     * The closing hour of the place or service on the given day(s) of the week.
     */
    private $closes;

    /**
     * The opening hour of the place or service on the given day(s) of the week.
     */
    private $opens;

    public function getDayOfWeek()
    {
        return $this->dayOfWeek;
    }

    public function setDayOfWeek($dayOfWeek)
    {
        $this->dayOfWeek = $dayOfWeek;
    }

    public function getCloses()
    {
        return $this->closes;
    }

    public function setCloses($closes)
    {
        $this->closes = $closes;
    }

    public function getOpens()
    {
        return $this->opens;
    }

    public function setOpens($opens)
    {
        $this->opens = $opens;
    }
}

