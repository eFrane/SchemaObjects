<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * An audio file.
 */
class AudioObject extends MediaObject
{
    /**
     * If this MediaObject is an AudioObject or VideoObject, the transcript of that
     * object.
     */
    private $transcript;

    public function getTranscript()
    {
        return $this->transcript;
    }

    public function setTranscript($transcript)
    {
        $this->transcript = $transcript;
    }
}

