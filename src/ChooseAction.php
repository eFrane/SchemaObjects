<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * The act of expressing a preference from a set of options or a large or unbounded
 * set of choices/options.
 */
class ChooseAction extends AssessAction
{
    /**
     * A sub property of object. The options subject to this action.
     */
    private $option;

    /**
     * A sub property of object. The options subject to this action.
     */
    private $actionOption;

    public function getOption()
    {
        return $this->option;
    }

    public function setOption($option)
    {
        $this->option = $option;
    }

    public function getActionOption()
    {
        return $this->actionOption;
    }

    public function setActionOption($actionOption)
    {
        $this->actionOption = $actionOption;
    }
}

