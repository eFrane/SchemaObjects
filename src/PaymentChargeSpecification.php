<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * The costs of settling the payment using a particular payment method.
 */
class PaymentChargeSpecification extends PriceSpecification
{
    /**
     * The payment method(s) to which the payment charge specification applies.
     */
    private $appliesToPaymentMethod;

    /**
     * The delivery method(s) to which the delivery charge or payment charge
     * specification applies.
     */
    private $appliesToDeliveryMethod;

    public function getAppliesToPaymentMethod()
    {
        return $this->appliesToPaymentMethod;
    }

    public function setAppliesToPaymentMethod($appliesToPaymentMethod)
    {
        $this->appliesToPaymentMethod = $appliesToPaymentMethod;
    }

    public function getAppliesToDeliveryMethod()
    {
        return $this->appliesToDeliveryMethod;
    }

    public function setAppliesToDeliveryMethod($appliesToDeliveryMethod)
    {
        $this->appliesToDeliveryMethod = $appliesToDeliveryMethod;
    }
}

