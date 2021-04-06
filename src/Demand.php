<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A demand entity represents the public, not necessarily binding, not necessarily
 * exclusive, announcement by an organization or person to seek a certain type of
 * goods or services. For describing demand using this type, the very same
 * properties used for Offer apply.
 */
class Demand extends Intangible
{
    /**
     * The warranty promise(s) included in the offer.
     */
    private $warranty;

    /**
     * The serial number or any alphanumeric identifier of a particular product. When
     * attached to an offer, it is a shortcut for the serial number of the product
     * included in the offer.
     */
    private $serialNumber;

    /**
     * The current approximate inventory level for the item or items.
     */
    private $inventoryLevel;

    /**
     * The type(s) of customers for which the given offer is valid.
     */
    private $eligibleCustomerType;

    /**
     * The transaction volume, in a monetary unit, for which the offer or price
     * specification is valid, e.g. for indicating a minimal purchasing volume, to
     * express free shipping above a certain order volume, or to limit the acceptance
     * of credit cards to purchases to a certain minimal amount.
     */
    private $eligibleTransactionVolume;

    /**
     * The availability of this item&#x2014;for example In stock, Out of stock,
     * Pre-order, etc.
     */
    private $availability;

    /**
     * The payment method(s) accepted by seller for this offer.
     */
    private $acceptedPaymentMethod;

    /**
     * The Stock Keeping Unit (SKU), i.e. a merchant-specific identifier for a product
     * or service, or the product to which the offer refers.
     */
    private $sku;

    /**
     * The GTIN-12 code of the product, or the product to which the offer refers. The
     * GTIN-12 is the 12-digit GS1 Identification Key composed of a U.P.C. Company
     * Prefix, Item Reference, and Check Digit used to identify trade items. See [GS1
     * GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more
     * details.
     */
    private $gtin12;

    /**
     * The amount of time that is required between accepting the offer and the actual
     * usage of the resource or service.
     */
    private $advanceBookingRequirement;

    public function getWarranty()
    {
        return $this->warranty;
    }

    public function setWarranty($warranty)
    {
        $this->warranty = $warranty;
    }

    public function getSerialNumber()
    {
        return $this->serialNumber;
    }

    public function setSerialNumber($serialNumber)
    {
        $this->serialNumber = $serialNumber;
    }

    public function getInventoryLevel()
    {
        return $this->inventoryLevel;
    }

    public function setInventoryLevel($inventoryLevel)
    {
        $this->inventoryLevel = $inventoryLevel;
    }

    public function getEligibleCustomerType()
    {
        return $this->eligibleCustomerType;
    }

    public function setEligibleCustomerType($eligibleCustomerType)
    {
        $this->eligibleCustomerType = $eligibleCustomerType;
    }

    public function getEligibleTransactionVolume()
    {
        return $this->eligibleTransactionVolume;
    }

    public function setEligibleTransactionVolume($eligibleTransactionVolume)
    {
        $this->eligibleTransactionVolume = $eligibleTransactionVolume;
    }

    public function getAvailability()
    {
        return $this->availability;
    }

    public function setAvailability($availability)
    {
        $this->availability = $availability;
    }

    public function getAcceptedPaymentMethod()
    {
        return $this->acceptedPaymentMethod;
    }

    public function setAcceptedPaymentMethod($acceptedPaymentMethod)
    {
        $this->acceptedPaymentMethod = $acceptedPaymentMethod;
    }

    public function getSku()
    {
        return $this->sku;
    }

    public function setSku($sku)
    {
        $this->sku = $sku;
    }

    public function getGtin12()
    {
        return $this->gtin12;
    }

    public function setGtin12($gtin12)
    {
        $this->gtin12 = $gtin12;
    }

    public function getAdvanceBookingRequirement()
    {
        return $this->advanceBookingRequirement;
    }

    public function setAdvanceBookingRequirement($advanceBookingRequirement)
    {
        $this->advanceBookingRequirement = $advanceBookingRequirement;
    }
}

