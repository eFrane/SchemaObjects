<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A food or drink item listed in a menu or menu section.
 */
class MenuItem extends Intangible
{
    /**
     * Nutrition information about the recipe or menu item.
     */
    private $nutrition;

    /**
     * Additional menu item(s) such as a side dish of salad or side order of fries that
     * can be added to this menu item. Additionally it can be a menu section containing
     * allowed add-on menu items for this menu item.
     */
    private $menuAddOn;

    public function getNutrition()
    {
        return $this->nutrition;
    }

    public function setNutrition($nutrition)
    {
        $this->nutrition = $nutrition;
    }

    public function getMenuAddOn()
    {
        return $this->menuAddOn;
    }

    public function setMenuAddOn($menuAddOn)
    {
        $this->menuAddOn = $menuAddOn;
    }
}

