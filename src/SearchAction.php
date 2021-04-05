<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * The act of searching for an object.
 *
 * Related actions:
 *
 * * [[FindAction]]: SearchAction generally leads to a FindAction, but not
 * necessarily.
 */
class SearchAction extends Action
{
    /**
     * A sub property of instrument. The query used on this action.
     */
    private $query;

    public function getQuery()
    {
        return $this->query;
    }

    public function setQuery($query)
    {
        $this->query = $query;
    }
}

