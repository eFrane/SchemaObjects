<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A structured value providing information about when a certain organization or
 * person owned a certain product.
 */
class OwnershipInfo extends StructuredValue
{
    /**
     * The date and time of giving up ownership on the product.
     */
    private $ownedThrough;

    /**
     * The organization or person from which the product was acquired.
     */
    private $acquiredFrom;

    /**
     * The product that this structured value is referring to.
     */
    private $typeOfGood;

    /**
     * The date and time of obtaining the product.
     */
    private $ownedFrom;

    public function getOwnedThrough()
    {
        return $this->ownedThrough;
    }

    public function setOwnedThrough($ownedThrough)
    {
        $this->ownedThrough = $ownedThrough;
    }

    public function getAcquiredFrom()
    {
        return $this->acquiredFrom;
    }

    public function setAcquiredFrom($acquiredFrom)
    {
        $this->acquiredFrom = $acquiredFrom;
    }

    public function getTypeOfGood()
    {
        return $this->typeOfGood;
    }

    public function setTypeOfGood($typeOfGood)
    {
        $this->typeOfGood = $typeOfGood;
    }

    public function getOwnedFrom()
    {
        return $this->ownedFrom;
    }

    public function setOwnedFrom($ownedFrom)
    {
        $this->ownedFrom = $ownedFrom;
    }
}

