<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * An order is a confirmation of a transaction (a receipt), which can contain
 * multiple line items, each represented by an Offer that has been accepted by the
 * customer.
 */
class Order extends Intangible
{
    /**
     * The order is being paid as part of the referenced Invoice.
     */
    private $partOfInvoice;

    /**
     * The delivery of the parcel related to this order or order item.
     */
    private $orderDelivery;

    /**
     * The URL for sending a payment.
     */
    private $paymentUrl;

    /**
     * An identifier for the method of payment used (e.g. the last 4 digits of the
     * credit card).
     */
    private $paymentMethodId;

    /**
     * Was the offer accepted as a gift for someone other than the buyer.
     */
    private $isGift;

    /**
     * The date that payment is due.
     */
    private $paymentDueDate;

    /**
     * The offer(s) -- e.g., product, quantity and price combinations -- included in
     * the order.
     */
    private $acceptedOffer;

    /**
     * Code used to redeem a discount.
     */
    private $discountCode;

    /**
     * Any discount applied (to an Order).
     */
    private $discount;

    /**
     * Date order was placed.
     */
    private $orderDate;

    /**
     * 'merchant' is an out-dated term for 'seller'.
     */
    private $merchant;

    /**
     * The currency of the discount.
     *
     * Use standard formats: [ISO 4217 currency
     * format](http://en.wikipedia.org/wiki/ISO_4217) e.g. "USD"; [Ticker
     * symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for
     * cryptocurrencies e.g. "BTC"; well known names for [Local Exchange Tradings
     * Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS) and
     * other currency types e.g. "Ithaca HOUR".
     */
    private $discountCurrency;

    /**
     * A number that confirms the given order or payment has been received.
     */
    private $confirmationNumber;

    /**
     * The identifier of the transaction.
     */
    private $orderNumber;

    /**
     * The current status of the order.
     */
    private $orderStatus;

    /**
     * The billing address for the order.
     */
    private $billingAddress;

    public function getPartOfInvoice()
    {
        return $this->partOfInvoice;
    }

    public function setPartOfInvoice($partOfInvoice)
    {
        $this->partOfInvoice = $partOfInvoice;
    }

    public function getOrderDelivery()
    {
        return $this->orderDelivery;
    }

    public function setOrderDelivery($orderDelivery)
    {
        $this->orderDelivery = $orderDelivery;
    }

    public function getPaymentUrl()
    {
        return $this->paymentUrl;
    }

    public function setPaymentUrl($paymentUrl)
    {
        $this->paymentUrl = $paymentUrl;
    }

    public function getPaymentMethodId()
    {
        return $this->paymentMethodId;
    }

    public function setPaymentMethodId($paymentMethodId)
    {
        $this->paymentMethodId = $paymentMethodId;
    }

    public function getIsGift()
    {
        return $this->isGift;
    }

    public function setIsGift($isGift)
    {
        $this->isGift = $isGift;
    }

    public function getPaymentDueDate()
    {
        return $this->paymentDueDate;
    }

    public function setPaymentDueDate($paymentDueDate)
    {
        $this->paymentDueDate = $paymentDueDate;
    }

    public function getAcceptedOffer()
    {
        return $this->acceptedOffer;
    }

    public function setAcceptedOffer($acceptedOffer)
    {
        $this->acceptedOffer = $acceptedOffer;
    }

    public function getDiscountCode()
    {
        return $this->discountCode;
    }

    public function setDiscountCode($discountCode)
    {
        $this->discountCode = $discountCode;
    }

    public function getDiscount()
    {
        return $this->discount;
    }

    public function setDiscount($discount)
    {
        $this->discount = $discount;
    }

    public function getOrderDate()
    {
        return $this->orderDate;
    }

    public function setOrderDate($orderDate)
    {
        $this->orderDate = $orderDate;
    }

    public function getMerchant()
    {
        return $this->merchant;
    }

    public function setMerchant($merchant)
    {
        $this->merchant = $merchant;
    }

    public function getDiscountCurrency()
    {
        return $this->discountCurrency;
    }

    public function setDiscountCurrency($discountCurrency)
    {
        $this->discountCurrency = $discountCurrency;
    }

    public function getConfirmationNumber()
    {
        return $this->confirmationNumber;
    }

    public function setConfirmationNumber($confirmationNumber)
    {
        $this->confirmationNumber = $confirmationNumber;
    }

    public function getOrderNumber()
    {
        return $this->orderNumber;
    }

    public function setOrderNumber($orderNumber)
    {
        $this->orderNumber = $orderNumber;
    }

    public function getOrderStatus()
    {
        return $this->orderStatus;
    }

    public function setOrderStatus($orderStatus)
    {
        $this->orderStatus = $orderStatus;
    }

    public function getBillingAddress()
    {
        return $this->billingAddress;
    }

    public function setBillingAddress($billingAddress)
    {
        $this->billingAddress = $billingAddress;
    }
}

