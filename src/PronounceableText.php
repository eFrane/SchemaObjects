<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * Data type: PronounceableText.
 */
class PronounceableText extends Text
{
    /**
     * Representation of a text [[textValue]] using the specified
     * [[speechToTextMarkup]]. For example the city name of Houston in IPA:
     * /ˈhjuːstən/.
     */
    private $phoneticText;

    /**
     * Text value being annotated.
     */
    private $textValue;

    /**
     * Form of markup used. eg. [SSML](https://www.w3.org/TR/speech-synthesis11) or
     * [IPA](https://www.wikidata.org/wiki/Property:P898).
     */
    private $speechToTextMarkup;

    public function getPhoneticText()
    {
        return $this->phoneticText;
    }

    public function setPhoneticText($phoneticText)
    {
        $this->phoneticText = $phoneticText;
    }

    public function getTextValue()
    {
        return $this->textValue;
    }

    public function setTextValue($textValue)
    {
        $this->textValue = $textValue;
    }

    public function getSpeechToTextMarkup()
    {
        return $this->speechToTextMarkup;
    }

    public function setSpeechToTextMarkup($speechToTextMarkup)
    {
        $this->speechToTextMarkup = $speechToTextMarkup;
    }
}

