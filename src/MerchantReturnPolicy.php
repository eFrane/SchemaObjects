<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A MerchantReturnPolicy provides information about product return policies
 * associated with an [[Organization]] or [[Product]].
 */
class MerchantReturnPolicy extends Intangible
{
    /**
     * Are in-store returns offered?
     */
    private $inStoreReturnsOffered;

    /**
     * Indicates (via enumerated options) the return fees policy for a
     * MerchantReturnPolicy
     */
    private $returnFees;

    /**
     * The merchantReturnDays property indicates the number of days (from purchase)
     * within which relevant merchant return policy is applicable.
     */
    private $merchantReturnDays;

    /**
     * A returnPolicyCategory expresses at most one of several enumerated kinds of
     * return.
     */
    private $returnPolicyCategory;

    /**
     * A refundType, from an enumerated list.
     */
    private $refundType;

    /**
     * Indicates a Web page or service by URL, for product return.
     */
    private $merchantReturnLink;

    public function getInStoreReturnsOffered()
    {
        return $this->inStoreReturnsOffered;
    }

    public function setInStoreReturnsOffered($inStoreReturnsOffered)
    {
        $this->inStoreReturnsOffered = $inStoreReturnsOffered;
    }

    public function getReturnFees()
    {
        return $this->returnFees;
    }

    public function setReturnFees($returnFees)
    {
        $this->returnFees = $returnFees;
    }

    public function getMerchantReturnDays()
    {
        return $this->merchantReturnDays;
    }

    public function setMerchantReturnDays($merchantReturnDays)
    {
        $this->merchantReturnDays = $merchantReturnDays;
    }

    public function getReturnPolicyCategory()
    {
        return $this->returnPolicyCategory;
    }

    public function setReturnPolicyCategory($returnPolicyCategory)
    {
        $this->returnPolicyCategory = $returnPolicyCategory;
    }

    public function getRefundType()
    {
        return $this->refundType;
    }

    public function setRefundType($refundType)
    {
        $this->refundType = $refundType;
    }

    public function getMerchantReturnLink()
    {
        return $this->merchantReturnLink;
    }

    public function setMerchantReturnLink($merchantReturnLink)
    {
        $this->merchantReturnLink = $merchantReturnLink;
    }
}

