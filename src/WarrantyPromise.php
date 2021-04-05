<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A structured value representing the duration and scope of services that will be
 * provided to a customer free of charge in case of a defect or malfunction of a
 * product.
 */
class WarrantyPromise extends StructuredValue
{
    /**
     * The scope of the warranty promise.
     */
    private $warrantyScope;

    /**
     * The duration of the warranty promise. Common unitCode values are ANN for year,
     * MON for months, or DAY for days.
     */
    private $durationOfWarranty;

    public function getWarrantyScope()
    {
        return $this->warrantyScope;
    }

    public function setWarrantyScope($warrantyScope)
    {
        $this->warrantyScope = $warrantyScope;
    }

    public function getDurationOfWarranty()
    {
        return $this->durationOfWarranty;
    }

    public function setDurationOfWarranty($durationOfWarranty)
    {
        $this->durationOfWarranty = $durationOfWarranty;
    }
}

