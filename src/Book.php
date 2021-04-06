<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A book.
 */
class Book extends CreativeWork
{
    /**
     * The number of pages in the book.
     */
    private $numberOfPages;

    /**
     * The format of the book.
     */
    private $bookFormat;

    /**
     * The ISBN of the book.
     */
    private $isbn;

    /**
     * The edition of the book.
     */
    private $bookEdition;

    /**
     * The illustrator of the book.
     */
    private $illustrator;

    /**
     * Indicates whether the book is an abridged edition.
     */
    private $abridged;

    public function getNumberOfPages()
    {
        return $this->numberOfPages;
    }

    public function setNumberOfPages($numberOfPages)
    {
        $this->numberOfPages = $numberOfPages;
    }

    public function getBookFormat()
    {
        return $this->bookFormat;
    }

    public function setBookFormat($bookFormat)
    {
        $this->bookFormat = $bookFormat;
    }

    public function getIsbn()
    {
        return $this->isbn;
    }

    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;
    }

    public function getBookEdition()
    {
        return $this->bookEdition;
    }

    public function setBookEdition($bookEdition)
    {
        $this->bookEdition = $bookEdition;
    }

    public function getIllustrator()
    {
        return $this->illustrator;
    }

    public function setIllustrator($illustrator)
    {
        $this->illustrator = $illustrator;
    }

    public function getAbridged()
    {
        return $this->abridged;
    }

    public function setAbridged($abridged)
    {
        $this->abridged = $abridged;
    }
}

