<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A HyperToEntry is an item within a [[HyperToc]], which represents a hypertext
 * table of contents for complex media objects, such as [[VideoObject]],
 * [[AudioObject]]. The media object itself is indicated using [[associatedMedia]].
 * Each section of interest within that content can be described with a
 * [[HyperTocEntry]], with associated [[startOffset]] and [[endOffset]]. When
 * several entries are all from the same file, [[associatedMedia]] is used on the
 * overarching [[HyperTocEntry]]; if the content has been split into multiple
 * files, they can be referenced using [[associatedMedia]] on each
 * [[HyperTocEntry]].
 */
class HyperTocEntry extends CreativeWork
{
    /**
     * A [[HyperTocEntry]] can have a [[tocContinuation]] indicated, which is another
     * [[HyperTocEntry]] that would be the default next item to play or render.
     */
    private $tocContinuation;

    /**
     * Text of an utterances (spoken words, lyrics etc.) that occurs at a certain
     * section of a media object, represented as a [[HyperTocEntry]].
     */
    private $utterances;

    public function getTocContinuation()
    {
        return $this->tocContinuation;
    }

    public function setTocContinuation($tocContinuation)
    {
        $this->tocContinuation = $tocContinuation;
    }

    public function getUtterances()
    {
        return $this->utterances;
    }

    public function setUtterances($utterances)
    {
        $this->utterances = $utterances;
    }
}

