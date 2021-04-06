<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A food-related business.
 */
class FoodEstablishment extends LocalBusiness
{
    /**
     * Indicates whether a FoodEstablishment accepts reservations. Values can be
     * Boolean, an URL at which reservations can be made or (for backwards
     * compatibility) the strings ```Yes``` or ```No```.
     */
    private $acceptsReservations;

    /**
     * Either the actual menu as a structured representation, as text, or a URL of the
     * menu.
     */
    private $menu;

    /**
     * Either the actual menu as a structured representation, as text, or a URL of the
     * menu.
     */
    private $hasMenu;

    /**
     * The cuisine of the restaurant.
     */
    private $servesCuisine;

    public function getAcceptsReservations()
    {
        return $this->acceptsReservations;
    }

    public function setAcceptsReservations($acceptsReservations)
    {
        $this->acceptsReservations = $acceptsReservations;
    }

    public function getMenu()
    {
        return $this->menu;
    }

    public function setMenu($menu)
    {
        $this->menu = $menu;
    }

    public function getHasMenu()
    {
        return $this->hasMenu;
    }

    public function setHasMenu($hasMenu)
    {
        $this->hasMenu = $hasMenu;
    }

    public function getServesCuisine()
    {
        return $this->servesCuisine;
    }

    public function setServesCuisine($servesCuisine)
    {
        $this->servesCuisine = $servesCuisine;
    }
}

