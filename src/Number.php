<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * Data type: Number.
 *
 * Usage guidelines:
 *
 * * Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE'
 * (U+0039)) rather than superficially similiar Unicode symbols.
 * * Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal
 * point. Avoid using these symbols as a readability separator.
 */
class Number extends Type
{
}

