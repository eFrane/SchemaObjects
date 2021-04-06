<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A software application designed specifically to work well on a mobile device
 * such as a telephone.
 */
class MobileApplication extends SoftwareApplication
{
    /**
     * Specifies specific carrier(s) requirements for the application (e.g. an
     * application may only work on a specific carrier network).
     */
    private $carrierRequirements;

    public function getCarrierRequirements()
    {
        return $this->carrierRequirements;
    }

    public function setCarrierRequirements($carrierRequirements)
    {
        $this->carrierRequirements = $carrierRequirements;
    }
}

