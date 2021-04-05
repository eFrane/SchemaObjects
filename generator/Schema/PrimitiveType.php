<?php


namespace EFrane\SchemaObjects\Generator\Schema;


use MyCLabs\Enum\Enum;

class DataType extends Enum
{
    const BOOLEAN = 'https://schema.org/Boolean';
    const DATE = 'https://schema.org/Date';
    const DATETIME = 'https://schema.org/DateTime';
    const NUMBER = 'https://schema.org/Number';
    const TEXT = 'https://schema.org/Text';
    const TIME = 'https://schema.org/Time';

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
