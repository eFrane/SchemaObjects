<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A TV episode which can be part of a series or season.
 */
class TVEpisode extends Episode
{
    /**
     * An [EIDR](https://eidr.org/) (Entertainment Identifier Registry) [[identifier]]
     * representing at the most general/abstract level, a work of film or television.
     *
     * For example, the motion picture known as "Ghostbusters" has a titleEIDR of 
     * "10.5240/7EC7-228A-510A-053E-CBB8-J". This title (or work) may have several
     * variants, which EIDR calls "edits". See [[editEIDR]].
     *
     * Since schema.org types like [[Movie]] and [[TVEpisode]] can be used for both
     * works and their multiple expressions, it is possible to use [[titleEIDR]] alone
     * (for a general description), or alongside [[editEIDR]] for a more edit-specific
     * description.
     */
    private $titleEIDR;

    public function getTitleEIDR()
    {
        return $this->titleEIDR;
    }

    public function setTitleEIDR($titleEIDR)
    {
        $this->titleEIDR = $titleEIDR;
    }
}

