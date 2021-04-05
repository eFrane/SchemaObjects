<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A body of structured information describing some topic(s) of interest.
 */
class Dataset extends CreativeWork
{
    /**
     * The range of temporal applicability of a dataset, e.g. for a 2011 census
     * dataset, the year 2011 (in ISO 8601 time interval format).
     */
    private $datasetTimeInterval;

    /**
     * Originally named [[variablesMeasured]], The [[variableMeasured]] property can
     * indicate (repeated as necessary) the  variables that are measured in some
     * dataset, either described as text or as pairs of identifier and description
     * using PropertyValue.
     */
    private $variablesMeasured;

    /**
     * The variableMeasured property can indicate (repeated as necessary) the 
     * variables that are measured in some dataset, either described as text or as
     * pairs of identifier and description using PropertyValue.
     */
    private $variableMeasured;

    /**
     * A data catalog which contains this dataset (this property was previously
     * 'catalog', preferred name is now 'includedInDataCatalog').
     */
    private $includedDataCatalog;

    /**
     * A data catalog which contains this dataset.
     */
    private $includedInDataCatalog;

    /**
     * A downloadable form of this dataset, at a specific location, in a specific
     * format.
     */
    private $distribution;

    /**
     * A data catalog which contains this dataset.
     */
    private $catalog;

    public function getDatasetTimeInterval()
    {
        return $this->datasetTimeInterval;
    }

    public function setDatasetTimeInterval($datasetTimeInterval)
    {
        $this->datasetTimeInterval = $datasetTimeInterval;
    }

    public function getVariablesMeasured()
    {
        return $this->variablesMeasured;
    }

    public function setVariablesMeasured($variablesMeasured)
    {
        $this->variablesMeasured = $variablesMeasured;
    }

    public function getVariableMeasured()
    {
        return $this->variableMeasured;
    }

    public function setVariableMeasured($variableMeasured)
    {
        $this->variableMeasured = $variableMeasured;
    }

    public function getIncludedDataCatalog()
    {
        return $this->includedDataCatalog;
    }

    public function setIncludedDataCatalog($includedDataCatalog)
    {
        $this->includedDataCatalog = $includedDataCatalog;
    }

    public function getIncludedInDataCatalog()
    {
        return $this->includedInDataCatalog;
    }

    public function setIncludedInDataCatalog($includedInDataCatalog)
    {
        $this->includedInDataCatalog = $includedInDataCatalog;
    }

    public function getDistribution()
    {
        return $this->distribution;
    }

    public function setDistribution($distribution)
    {
        $this->distribution = $distribution;
    }

    public function getCatalog()
    {
        return $this->catalog;
    }

    public function setCatalog($catalog)
    {
        $this->catalog = $catalog;
    }
}

