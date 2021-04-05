<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects\Generator\Schema;


use EasyRdf\Resource;

final class RdfsClass extends Resource
{
    /**
     * @var RdfProperty[]
     */
    private $properties;

    public function getLabel(): string
    {
        return $this->get('rdfs:label')->getValue();
    }

    public function getComment(): string
    {
        return $this->get('rdfs:comment')->getValue();
    }

    public function getSubClassOf(): ?string
    {
        if (!$this->isSubClass()) {
            return null;
        }

        return $this->get('rdfs:subClassOf')->getValue();
    }

    public function isSubClass(): bool
    {
        return $this->hasProperty('rdfs:subClassOf');
    }

    public function addProperty(RdfProperty $rdfProperty): void
    {
        $this->properties[] = $rdfProperty;
    }

    /**
     * @return RdfProperty[]
     */
    public function getProperties(): array
    {
        return $this->properties;
    }
}
