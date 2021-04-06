<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * Any collection of tests commonly ordered together.
 */
class MedicalTestPanel extends MedicalTest
{
    /**
     * A component test of the panel.
     */
    private $subTest;

    public function getSubTest()
    {
        return $this->subTest;
    }

    public function setSubTest($subTest)
    {
        $this->subTest = $subTest;
    }
}

