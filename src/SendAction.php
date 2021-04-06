<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * The act of physically/electronically dispatching an object for transfer from an
 * origin to a destination.Related actions:
 *
 * * [[ReceiveAction]]: The reciprocal of SendAction.
 * * [[GiveAction]]: Unlike GiveAction, SendAction does not imply the transfer of
 * ownership (e.g. I can send you my laptop, but I'm not necessarily giving it to
 * you).
 */
class SendAction extends TransferAction
{
    /**
     * A sub property of instrument. The method of delivery.
     */
    private $deliveryMethod;

    public function getDeliveryMethod()
    {
        return $this->deliveryMethod;
    }

    public function setDeliveryMethod($deliveryMethod)
    {
        $this->deliveryMethod = $deliveryMethod;
    }
}

