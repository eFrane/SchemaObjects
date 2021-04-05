<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * One of the sections into which a book is divided. A chapter usually has a
 * section number or a name.
 */
class Chapter extends CreativeWork
{
    /**
     * The page on which the work starts; for example "135" or "xiii".
     */
    private $pageStart;

    public function getPageStart()
    {
        return $this->pageStart;
    }

    public function setPageStart($pageStart)
    {
        $this->pageStart = $pageStart;
    }
}

