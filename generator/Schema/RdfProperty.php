<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects\Generator\Schema;

use EasyRdf\Resource;

final class RdfProperty extends SchemaResource
{
    const PRIMITIVE_TYPE_URI = 'https://schema.org/DataType';

    public function isPrimitiveType(): bool
    {
        return PrimitiveType::isValid($this->getLabel());
    }

    public function getPhpType(): string
    {
        if (!$this->isPrimitiveType()) {
            // TODO: handle references to complex types
            return 'mixed';
        }

        return PrimitiveType::map($this->getLabel());
    }
}
