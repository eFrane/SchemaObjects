<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A single feed providing structured information about one or more entities or
 * topics.
 */
class DataFeed extends Dataset
{
    /**
     * An item within in a data feed. Data feeds may have many elements.
     */
    private $dataFeedElement;

    public function getDataFeedElement()
    {
        return $this->dataFeedElement;
    }

    public function setDataFeedElement($dataFeedElement)
    {
        $this->dataFeedElement = $dataFeedElement;
    }
}

