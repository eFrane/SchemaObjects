<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A collection of datasets.
 */
class DataCatalog extends CreativeWork
{
    /**
     * A dataset contained in this catalog.
     */
    private $dataset;

    public function getDataset()
    {
        return $this->dataset;
    }

    public function setDataset($dataset)
    {
        $this->dataset = $dataset;
    }
}

