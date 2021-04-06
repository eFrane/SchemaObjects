<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * The act of producing/preparing food.
 */
class CookAction extends CreateAction
{
    /**
     * A sub property of location. The specific food event where the action occurred.
     */
    private $foodEvent;

    /**
     * A sub property of instrument. The recipe/instructions used to perform the
     * action.
     */
    private $recipe;

    /**
     * A sub property of location. The specific food establishment where the action
     * occurred.
     */
    private $foodEstablishment;

    public function getFoodEvent()
    {
        return $this->foodEvent;
    }

    public function setFoodEvent($foodEvent)
    {
        $this->foodEvent = $foodEvent;
    }

    public function getRecipe()
    {
        return $this->recipe;
    }

    public function setRecipe($recipe)
    {
        $this->recipe = $recipe;
    }

    public function getFoodEstablishment()
    {
        return $this->foodEstablishment;
    }

    public function setFoodEstablishment($foodEstablishment)
    {
        $this->foodEstablishment = $foodEstablishment;
    }
}

