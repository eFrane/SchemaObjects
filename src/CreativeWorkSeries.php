<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A CreativeWorkSeries in schema.org is a group of related items, typically but
 * not necessarily of the same kind. CreativeWorkSeries are usually organized into
 * some order, often chronological. Unlike [[ItemList]] which is a general purpose
 * data structure for lists of things, the emphasis with CreativeWorkSeries is on
 * published materials (written e.g. books and periodicals, or media such as tv,
 * radio and games).
 *
 * Specific subtypes are available for describing [[TVSeries]], [[RadioSeries]],
 * [[MovieSeries]], [[BookSeries]], [[Periodical]] and [[VideoGameSeries]]. In each
 * case, the [[hasPart]] / [[isPartOf]] properties can be used to relate the
 * CreativeWorkSeries to its parts. The general CreativeWorkSeries type serves
 * largely just to organize these more specific and practical subtypes.
 *
 * It is common for properties applicable to an item from the series to be usefully
 * applied to the containing group. Schema.org attempts to anticipate some of these
 * cases, but publishers should be free to apply properties of the series parts to
 * the series as a whole wherever they seem appropriate.
 */
class CreativeWorkSeries extends CreativeWork
{
    /**
     * The end date and time of the item (in [ISO 8601 date
     * format](http://en.wikipedia.org/wiki/ISO_8601)).
     */
    private $endDate;

    public function getEndDate()
    {
        return $this->endDate;
    }

    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
    }
}

