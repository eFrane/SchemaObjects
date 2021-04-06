<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A math solver which is capable of solving a subset of mathematical problems.
 */
class MathSolver extends CreativeWork
{
    /**
     * A mathematical expression (e.g. 'x^2-3x=0') that may be solved for a specific
     * variable, simplified, or transformed. This can take many formats, e.g. LaTeX,
     * Ascii-Math, or math as you would write with a keyboard.
     */
    private $mathExpression;

    public function getMathExpression()
    {
        return $this->mathExpression;
    }

    public function setMathExpression($mathExpression)
    {
        $this->mathExpression = $mathExpression;
    }
}

