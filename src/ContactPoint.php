<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A contact point&#x2014;for example, a Customer Complaints department.
 */
class ContactPoint extends StructuredValue
{
    /**
     * The hours during which this service or contact is available.
     */
    private $hoursAvailable;

    /**
     * A person or organization can have different contact points, for different
     * purposes. For example, a sales contact point, a PR contact point and so on. This
     * property is used to specify the kind of contact point.
     */
    private $contactType;

    /**
     * An option available on this contact point (e.g. a toll-free number or support
     * for hearing-impaired callers).
     */
    private $contactOption;

    /**
     * The product or service this support contact point is related to (such as product
     * support for a particular product line). This can be a specific product or
     * product line (e.g. "iPhone") or a general category of products or services (e.g.
     * "smartphones").
     */
    private $productSupported;

    /**
     * A language someone may use with or at the item, service or place. Please use one
     * of the language codes from the [IETF BCP 47
     * standard](http://tools.ietf.org/html/bcp47). See also [[inLanguage]]
     */
    private $availableLanguage;

    public function getHoursAvailable()
    {
        return $this->hoursAvailable;
    }

    public function setHoursAvailable($hoursAvailable)
    {
        $this->hoursAvailable = $hoursAvailable;
    }

    public function getContactType()
    {
        return $this->contactType;
    }

    public function setContactType($contactType)
    {
        $this->contactType = $contactType;
    }

    public function getContactOption()
    {
        return $this->contactOption;
    }

    public function setContactOption($contactOption)
    {
        $this->contactOption = $contactOption;
    }

    public function getProductSupported()
    {
        return $this->productSupported;
    }

    public function setProductSupported($productSupported)
    {
        $this->productSupported = $productSupported;
    }

    public function getAvailableLanguage()
    {
        return $this->availableLanguage;
    }

    public function setAvailableLanguage($availableLanguage)
    {
        $this->availableLanguage = $availableLanguage;
    }
}

