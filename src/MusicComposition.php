<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A musical composition.
 */
class MusicComposition extends CreativeWork
{
    /**
     * An arrangement derived from the composition.
     */
    private $musicArrangement;

    /**
     * The date and place the work was first performed.
     */
    private $firstPerformance;

    /**
     * The key, mode, or scale this composition uses.
     */
    private $musicalKey;

    /**
     * The person who wrote the words.
     */
    private $lyricist;

    /**
     * The words in the song.
     */
    private $lyrics;

    /**
     * Smaller compositions included in this work (e.g. a movement in a symphony).
     */
    private $includedComposition;

    /**
     * The International Standard Musical Work Code for the composition.
     */
    private $iswcCode;

    /**
     * The type of composition (e.g. overture, sonata, symphony, etc.).
     */
    private $musicCompositionForm;

    /**
     * An audio recording of the work.
     */
    private $recordedAs;

    public function getMusicArrangement()
    {
        return $this->musicArrangement;
    }

    public function setMusicArrangement($musicArrangement)
    {
        $this->musicArrangement = $musicArrangement;
    }

    public function getFirstPerformance()
    {
        return $this->firstPerformance;
    }

    public function setFirstPerformance($firstPerformance)
    {
        $this->firstPerformance = $firstPerformance;
    }

    public function getMusicalKey()
    {
        return $this->musicalKey;
    }

    public function setMusicalKey($musicalKey)
    {
        $this->musicalKey = $musicalKey;
    }

    public function getLyricist()
    {
        return $this->lyricist;
    }

    public function setLyricist($lyricist)
    {
        $this->lyricist = $lyricist;
    }

    public function getLyrics()
    {
        return $this->lyrics;
    }

    public function setLyrics($lyrics)
    {
        $this->lyrics = $lyrics;
    }

    public function getIncludedComposition()
    {
        return $this->includedComposition;
    }

    public function setIncludedComposition($includedComposition)
    {
        $this->includedComposition = $includedComposition;
    }

    public function getIswcCode()
    {
        return $this->iswcCode;
    }

    public function setIswcCode($iswcCode)
    {
        $this->iswcCode = $iswcCode;
    }

    public function getMusicCompositionForm()
    {
        return $this->musicCompositionForm;
    }

    public function setMusicCompositionForm($musicCompositionForm)
    {
        $this->musicCompositionForm = $musicCompositionForm;
    }

    public function getRecordedAs()
    {
        return $this->recordedAs;
    }

    public function setRecordedAs($recordedAs)
    {
        $this->recordedAs = $recordedAs;
    }
}

