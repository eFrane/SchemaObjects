<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * An order item is a line of an order. It includes the quantity and shipping
 * details of a bought offer.
 */
class OrderItem extends Intangible
{
    /**
     * The item ordered.
     */
    private $orderedItem;

    /**
     * The current status of the order item.
     */
    private $orderItemStatus;

    /**
     * The number of the item ordered. If the property is not set, assume the quantity
     * is one.
     */
    private $orderQuantity;

    /**
     * The identifier of the order item.
     */
    private $orderItemNumber;

    public function getOrderedItem()
    {
        return $this->orderedItem;
    }

    public function setOrderedItem($orderedItem)
    {
        $this->orderedItem = $orderedItem;
    }

    public function getOrderItemStatus()
    {
        return $this->orderItemStatus;
    }

    public function setOrderItemStatus($orderItemStatus)
    {
        $this->orderItemStatus = $orderItemStatus;
    }

    public function getOrderQuantity()
    {
        return $this->orderQuantity;
    }

    public function setOrderQuantity($orderQuantity)
    {
        $this->orderQuantity = $orderQuantity;
    }

    public function getOrderItemNumber()
    {
        return $this->orderItemNumber;
    }

    public function setOrderItemNumber($orderItemNumber)
    {
        $this->orderItemNumber = $orderItemNumber;
    }
}

