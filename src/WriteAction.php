<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * The act of authoring written creative content.
 */
class WriteAction extends CreateAction
{
    /**
     * A sub property of instrument. The language used on this action.
     */
    private $language;

    public function getLanguage()
    {
        return $this->language;
    }

    public function setLanguage($language)
    {
        $this->language = $language;
    }
}

