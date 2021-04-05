<?php


namespace EFrane\SchemaObjects\Generator\Schema;


use EasyRdf\Resource;

class SchemaResource extends Resource
{
    public function getLabel(): string
    {
        return $this->get('rdfs:label')->getValue();
    }

    public function getComment(): string
    {
        $value = $this->get('rdfs:comment')->getValue();

        return str_replace('\n', "\n", $value);
    }
}
