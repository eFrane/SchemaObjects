<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * The act of posing a question / favor to someone.
 *
 * Related actions:
 *
 * * [[ReplyAction]]: Appears generally as a response to AskAction.
 */
class AskAction extends CommunicateAction
{
    /**
     * A sub property of object. A question.
     */
    private $question;

    public function getQuestion()
    {
        return $this->question;
    }

    public function setQuestion($question)
    {
        $this->question = $question;
    }
}

