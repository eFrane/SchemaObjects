<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * The act of managing by changing/editing the state of the object.
 */
class UpdateAction extends Action
{
    /**
     * A sub property of object. The collection target of the action.
     */
    private $collection;

    /**
     * A sub property of object. The collection target of the action.
     */
    private $targetCollection;

    public function getCollection()
    {
        return $this->collection;
    }

    public function setCollection($collection)
    {
        $this->collection = $collection;
    }

    public function getTargetCollection()
    {
        return $this->targetCollection;
    }

    public function setTargetCollection($targetCollection)
    {
        $this->targetCollection = $targetCollection;
    }
}

