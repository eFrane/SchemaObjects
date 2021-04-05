<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * The act of responding to a question/message asked/sent by the object. Related to
 * [[AskAction]]
 *
 * Related actions:
 *
 * * [[AskAction]]: Appears generally as an origin of a ReplyAction.
 */
class ReplyAction extends CommunicateAction
{
    /**
     * A sub property of result. The Comment created or sent as a result of this
     * action.
     */
    private $resultComment;

    public function getResultComment()
    {
        return $this->resultComment;
    }

    public function setResultComment($resultComment)
    {
        $this->resultComment = $resultComment;
    }
}

