<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects\Generator\Schema;


final class RdfsClass extends SchemaResource
{
    /**
     * @var RdfProperty[]
     */
    private $properties = [];

    public function getSubClassOf(): ?string
    {
        if (!$this->isSubClass()) {
            return null;
        }

        $superResource = $this->get('rdfs:subClassOf');

        if ($superResource instanceof self) {
            return $superResource->getLabel();
        }

        /**
         * If a super resource is not a rdfs class itself it may be assumed to
         * be part of the encasing schema and thus a primitive type.
         */

        return null;
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
