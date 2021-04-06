<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A work of art that is primarily visual in character.
 */
class VisualArtwork extends CreativeWork
{
    /**
     * The individual who adds color to inked drawings.
     */
    private $colorist;

    /**
     * The number of copies when multiple copies of a piece of artwork are produced -
     * e.g. for a limited edition of 20 prints, 'artEdition' refers to the total number
     * of copies (in this example "20").
     */
    private $artEdition;

    /**
     * The material used. (e.g. Oil, Watercolour, Acrylic, Linoprint, Marble,
     * Cyanotype, Digital, Lithograph, DryPoint, Intaglio, Pastel, Woodcut, Pencil,
     * Mixed Media, etc.)
     */
    private $artMedium;

    /**
     * e.g. Painting, Drawing, Sculpture, Print, Photograph, Assemblage, Collage, etc.
     */
    private $artform;

    /**
     * The depth of the item.
     */
    private $depth;

    /**
     * A material used as a surface in some artwork, e.g. Canvas, Paper, Wood, Board,
     * etc.
     */
    private $surface;

    /**
     * The supporting materials for the artwork, e.g. Canvas, Paper, Wood, Board, etc.
     */
    private $artworkSurface;

    public function getColorist()
    {
        return $this->colorist;
    }

    public function setColorist($colorist)
    {
        $this->colorist = $colorist;
    }

    public function getArtEdition()
    {
        return $this->artEdition;
    }

    public function setArtEdition($artEdition)
    {
        $this->artEdition = $artEdition;
    }

    public function getArtMedium()
    {
        return $this->artMedium;
    }

    public function setArtMedium($artMedium)
    {
        $this->artMedium = $artMedium;
    }

    public function getArtform()
    {
        return $this->artform;
    }

    public function setArtform($artform)
    {
        $this->artform = $artform;
    }

    public function getDepth()
    {
        return $this->depth;
    }

    public function setDepth($depth)
    {
        $this->depth = $depth;
    }

    public function getSurface()
    {
        return $this->surface;
    }

    public function setSurface($surface)
    {
        $this->surface = $surface;
    }

    public function getArtworkSurface()
    {
        return $this->artworkSurface;
    }

    public function setArtworkSurface($artworkSurface)
    {
        $this->artworkSurface = $artworkSurface;
    }
}

