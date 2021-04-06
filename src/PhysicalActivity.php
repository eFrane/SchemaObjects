<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * Any bodily activity that enhances or maintains physical fitness and overall
 * health and wellness. Includes activity that is part of daily living and routine,
 * structured exercise, and exercise prescribed as part of a medical treatment or
 * recovery plan.
 */
class PhysicalActivity extends LifestyleModification
{
    /**
     * The anatomy of the underlying organ system or structures associated with this
     * entity.
     */
    private $associatedAnatomy;

    /**
     * The characteristics of associated patients, such as age, gender, race etc.
     */
    private $epidemiology;

    /**
     * Changes in the normal mechanical, physical, and biochemical functions that are
     * associated with this activity or condition.
     */
    private $pathophysiology;

    public function getAssociatedAnatomy()
    {
        return $this->associatedAnatomy;
    }

    public function setAssociatedAnatomy($associatedAnatomy)
    {
        $this->associatedAnatomy = $associatedAnatomy;
    }

    public function getEpidemiology()
    {
        return $this->epidemiology;
    }

    public function setEpidemiology($epidemiology)
    {
        $this->epidemiology = $epidemiology;
    }

    public function getPathophysiology()
    {
        return $this->pathophysiology;
    }

    public function setPathophysiology($pathophysiology)
    {
        $this->pathophysiology = $pathophysiology;
    }
}

