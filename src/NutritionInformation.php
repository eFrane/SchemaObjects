<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * Nutritional information about the recipe.
 */
class NutritionInformation extends StructuredValue
{
    /**
     * The serving size, in terms of the number of volume or mass.
     */
    private $servingSize;

    /**
     * The number of grams of fiber.
     */
    private $fiberContent;

    /**
     * The number of grams of unsaturated fat.
     */
    private $unsaturatedFatContent;

    /**
     * The number of grams of protein.
     */
    private $proteinContent;

    /**
     * The number of grams of fat.
     */
    private $fatContent;

    /**
     * The number of milligrams of cholesterol.
     */
    private $cholesterolContent;

    /**
     * The number of grams of saturated fat.
     */
    private $saturatedFatContent;

    /**
     * The number of calories.
     */
    private $calories;

    /**
     * The number of grams of sugar.
     */
    private $sugarContent;

    /**
     * The number of grams of trans fat.
     */
    private $transFatContent;

    /**
     * The number of milligrams of sodium.
     */
    private $sodiumContent;

    /**
     * The number of grams of carbohydrates.
     */
    private $carbohydrateContent;

    public function getServingSize()
    {
        return $this->servingSize;
    }

    public function setServingSize($servingSize)
    {
        $this->servingSize = $servingSize;
    }

    public function getFiberContent()
    {
        return $this->fiberContent;
    }

    public function setFiberContent($fiberContent)
    {
        $this->fiberContent = $fiberContent;
    }

    public function getUnsaturatedFatContent()
    {
        return $this->unsaturatedFatContent;
    }

    public function setUnsaturatedFatContent($unsaturatedFatContent)
    {
        $this->unsaturatedFatContent = $unsaturatedFatContent;
    }

    public function getProteinContent()
    {
        return $this->proteinContent;
    }

    public function setProteinContent($proteinContent)
    {
        $this->proteinContent = $proteinContent;
    }

    public function getFatContent()
    {
        return $this->fatContent;
    }

    public function setFatContent($fatContent)
    {
        $this->fatContent = $fatContent;
    }

    public function getCholesterolContent()
    {
        return $this->cholesterolContent;
    }

    public function setCholesterolContent($cholesterolContent)
    {
        $this->cholesterolContent = $cholesterolContent;
    }

    public function getSaturatedFatContent()
    {
        return $this->saturatedFatContent;
    }

    public function setSaturatedFatContent($saturatedFatContent)
    {
        $this->saturatedFatContent = $saturatedFatContent;
    }

    public function getCalories()
    {
        return $this->calories;
    }

    public function setCalories($calories)
    {
        $this->calories = $calories;
    }

    public function getSugarContent()
    {
        return $this->sugarContent;
    }

    public function setSugarContent($sugarContent)
    {
        $this->sugarContent = $sugarContent;
    }

    public function getTransFatContent()
    {
        return $this->transFatContent;
    }

    public function setTransFatContent($transFatContent)
    {
        $this->transFatContent = $transFatContent;
    }

    public function getSodiumContent()
    {
        return $this->sodiumContent;
    }

    public function setSodiumContent($sodiumContent)
    {
        $this->sodiumContent = $sodiumContent;
    }

    public function getCarbohydrateContent()
    {
        return $this->carbohydrateContent;
    }

    public function setCarbohydrateContent($carbohydrateContent)
    {
        $this->carbohydrateContent = $carbohydrateContent;
    }
}

