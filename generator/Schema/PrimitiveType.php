<?php


namespace EFrane\SchemaObjects\Generator\Schema;


use MyCLabs\Enum\Enum;

final class PrimitiveType extends Enum
{
    const BOOLEAN = 'boolean';
    const DATE = 'date';
    const DATETIME = 'dateTime';
    const NUMBER = 'number';
    const TEXT = 'text';
    const TIME = 'time';

    static public function map(string $rdfTypeUri): string
    {
        switch ($rdfTypeUri) {
            case self::BOOLEAN:
                return 'bool';

            case self::DATE:
            case self::DATETIME:
            case self::NUMBER:
            case self::TEXT:
            case self::TIME:
                return 'string';

            default:
                throw new \InvalidArgumentException('Cannot handle rdf type '.$rdfTypeUri);
        }
    }
}
