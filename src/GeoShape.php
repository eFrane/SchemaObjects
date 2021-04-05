<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * The geographic shape of a place. A GeoShape can be described using several
 * properties whose values are based on latitude/longitude pairs. Either whitespace
 * or commas can be used to separate latitude and longitude; whitespace should be
 * used when writing a list of several such points.
 */
class GeoShape extends StructuredValue
{
    /**
     * A box is the area enclosed by the rectangle formed by two points. The first
     * point is the lower corner, the second point is the upper corner. A box is
     * expressed as two points separated by a space character.
     */
    private $box;

    /**
     * The country. For example, USA. You can also provide the two-letter [ISO 3166-1
     * alpha-2 country code](http://en.wikipedia.org/wiki/ISO_3166-1).
     */
    private $addressCountry;

    /**
     * A line is a point-to-point path consisting of two or more points. A line is
     * expressed as a series of two or more point objects separated by space.
     */
    private $line;

    /**
     * A polygon is the area enclosed by a point-to-point path for which the starting
     * and ending points are the same. A polygon is expressed as a series of four or
     * more space delimited points where the first and final points are identical.
     */
    private $polygon;

    /**
     * A circle is the circular region of a specified radius centered at a specified
     * latitude and longitude. A circle is expressed as a pair followed by a radius in
     * meters.
     */
    private $circle;

    public function getBox()
    {
        return $this->box;
    }

    public function setBox($box)
    {
        $this->box = $box;
    }

    public function getAddressCountry()
    {
        return $this->addressCountry;
    }

    public function setAddressCountry($addressCountry)
    {
        $this->addressCountry = $addressCountry;
    }

    public function getLine()
    {
        return $this->line;
    }

    public function setLine($line)
    {
        $this->line = $line;
    }

    public function getPolygon()
    {
        return $this->polygon;
    }

    public function setPolygon($polygon)
    {
        $this->polygon = $polygon;
    }

    public function getCircle()
    {
        return $this->circle;
    }

    public function setCircle($circle)
    {
        $this->circle = $circle;
    }
}

