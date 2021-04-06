<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * The act of giving money in return for temporary use, but not ownership, of an
 * object such as a vehicle or property. For example, an agent rents a property
 * from a landlord in exchange for a periodic payment.
 */
class RentAction extends TradeAction
{
    /**
     * A sub property of participant. The owner of the real estate property.
     */
    private $landlord;

    /**
     * A sub property of participant. The real estate agent involved in the action.
     */
    private $realEstateAgent;

    public function getLandlord()
    {
        return $this->landlord;
    }

    public function setLandlord($landlord)
    {
        $this->landlord = $landlord;
    }

    public function getRealEstateAgent()
    {
        return $this->realEstateAgent;
    }

    public function setRealEstateAgent($realEstateAgent)
    {
        $this->realEstateAgent = $realEstateAgent;
    }
}

