<?php

use App\CompCalc;
use App\Numbers\ComplexNumber;
use PHPUnit\Framework\TestCase;

class NegativeOperationTest extends TestCase
{
    /**
     * @param ComplexNumber $a
     * @param ComplexNumber $expected
     *
     * @dataProvider dataProvider
     */
    public function testComplexNumberNegative(ComplexNumber $a, ComplexNumber $expected)
    {
        $this->assertEquals(CompCalc::negative($a), $expected, 'Not equal');
    }

    public function dataProvider()
    {
        return [
            [new ComplexNumber(-5.1, -3), new ComplexNumber(5.1, 3)],
            [new ComplexNumber(1, 1), new ComplexNumber(-1, -1)],
            [new ComplexNumber(0, 0), new ComplexNumber(0, 0)],
        ];
    }
}
