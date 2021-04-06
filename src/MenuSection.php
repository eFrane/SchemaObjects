<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A sub-grouping of food or drink items in a menu. E.g. courses (such as 'Dinner',
 * 'Breakfast', etc.), specific type of dishes (such as 'Meat', 'Vegan', 'Drinks',
 * etc.), or some other classification made by the menu provider.
 */
class MenuSection extends CreativeWork
{
    /**
     * A subgrouping of the menu (by dishes, course, serving time period, etc.).
     */
    private $hasMenuSection;

    /**
     * A food or drink item contained in a menu or menu section.
     */
    private $hasMenuItem;

    public function getHasMenuSection()
    {
        return $this->hasMenuSection;
    }

    public function setHasMenuSection($hasMenuSection)
    {
        $this->hasMenuSection = $hasMenuSection;
    }

    public function getHasMenuItem()
    {
        return $this->hasMenuItem;
    }

    public function setHasMenuItem($hasMenuItem)
    {
        $this->hasMenuItem = $hasMenuItem;
    }
}

