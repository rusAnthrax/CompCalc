<?php

use App\CompCalc;
use App\Numbers\ComplexNumber;
use PHPUnit\Framework\TestCase;

class SubstOperationTest extends TestCase
{
    /**
     * @param ComplexNumber $a
     * @param ComplexNumber $b
     * @param ComplexNumber $expected
     *
     * @dataProvider dataProvider
     */
    public function testComplexNumbersSubstitution(ComplexNumber $a, ComplexNumber $b, ComplexNumber $expected)
    {
        $this->assertEquals(CompCalc::subtract($a, $b), $expected, 'Not equal');
    }

    public function dataProvider()
    {
        return [
            [new ComplexNumber(10, 10), new ComplexNumber(0, 0), new ComplexNumber(10, 10)],
            [new ComplexNumber(0, 0), new ComplexNumber(10, 10), new ComplexNumber(-10, -10)],
            [new ComplexNumber(0, 0), new ComplexNumber(0, 0), new ComplexNumber(0, 0)],
            [new ComplexNumber(-10, -10), new ComplexNumber(-5, 10), new ComplexNumber(-5, -20)],
        ];
    }
}
