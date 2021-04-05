<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A recipe. For dietary restrictions covered by the recipe, a few common
 * restrictions are enumerated via [[suitableForDiet]]. The [[keywords]] property
 * can also be used to add more detail.
 */
class Recipe extends HowTo
{
    /**
     * The cuisine of the recipe (for example, French or Ethiopian).
     */
    private $recipeCuisine;

    /**
     * The quantity produced by the recipe (for example, number of people served,
     * number of servings, etc).
     */
    private $recipeYield;

    /**
     * A single ingredient used in the recipe, e.g. sugar, flour or garlic.
     */
    private $ingredients;

    /**
     * A single ingredient used in the recipe, e.g. sugar, flour or garlic.
     */
    private $recipeIngredient;

    /**
     * The time it takes to actually cook the dish, in [ISO 8601 duration
     * format](http://en.wikipedia.org/wiki/ISO_8601).
     */
    private $cookTime;

    /**
     * A step in making the recipe, in the form of a single item (document, video,
     * etc.) or an ordered list with HowToStep and/or HowToSection items.
     */
    private $recipeInstructions;

    /**
     * Indicates a dietary restriction or guideline for which this recipe or menu item
     * is suitable, e.g. diabetic, halal etc.
     */
    private $suitableForDiet;

    /**
     * The method of cooking, such as Frying, Steaming, ...
     */
    private $cookingMethod;

    /**
     * The category of the recipe—for example, appetizer, entree, etc.
     */
    private $recipeCategory;

    public function getRecipeCuisine()
    {
        return $this->recipeCuisine;
    }

    public function setRecipeCuisine($recipeCuisine)
    {
        $this->recipeCuisine = $recipeCuisine;
    }

    public function getRecipeYield()
    {
        return $this->recipeYield;
    }

    public function setRecipeYield($recipeYield)
    {
        $this->recipeYield = $recipeYield;
    }

    public function getIngredients()
    {
        return $this->ingredients;
    }

    public function setIngredients($ingredients)
    {
        $this->ingredients = $ingredients;
    }

    public function getRecipeIngredient()
    {
        return $this->recipeIngredient;
    }

    public function setRecipeIngredient($recipeIngredient)
    {
        $this->recipeIngredient = $recipeIngredient;
    }

    public function getCookTime()
    {
        return $this->cookTime;
    }

    public function setCookTime($cookTime)
    {
        $this->cookTime = $cookTime;
    }

    public function getRecipeInstructions()
    {
        return $this->recipeInstructions;
    }

    public function setRecipeInstructions($recipeInstructions)
    {
        $this->recipeInstructions = $recipeInstructions;
    }

    public function getSuitableForDiet()
    {
        return $this->suitableForDiet;
    }

    public function setSuitableForDiet($suitableForDiet)
    {
        $this->suitableForDiet = $suitableForDiet;
    }

    public function getCookingMethod()
    {
        return $this->cookingMethod;
    }

    public function setCookingMethod($cookingMethod)
    {
        $this->cookingMethod = $cookingMethod;
    }

    public function getRecipeCategory()
    {
        return $this->recipeCategory;
    }

    public function setRecipeCategory($recipeCategory)
    {
        $this->recipeCategory = $recipeCategory;
    }
}

