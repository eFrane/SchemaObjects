<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A web page element, like a table or an image.
 */
class WebPageElement extends CreativeWork
{
    /**
     * An XPath, e.g. of a [[SpeakableSpecification]] or [[WebPageElement]]. In the
     * latter case, multiple matches within a page can constitute a single conceptual
     * "Web page element".
     */
    private $xpath;

    /**
     * A CSS selector, e.g. of a [[SpeakableSpecification]] or [[WebPageElement]]. In
     * the latter case, multiple matches within a page can constitute a single
     * conceptual "Web page element".
     */
    private $cssSelector;

    public function getXpath()
    {
        return $this->xpath;
    }

    public function setXpath($xpath)
    {
        $this->xpath = $xpath;
    }

    public function getCssSelector()
    {
        return $this->cssSelector;
    }

    public function setCssSelector($cssSelector)
    {
        $this->cssSelector = $cssSelector;
    }
}

