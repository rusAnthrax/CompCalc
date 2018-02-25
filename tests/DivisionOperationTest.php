<?php

use App\CompCalc;
use App\Exceptions\DivisionByZeroException;
use App\Numbers\ComplexNumber;
use PHPUnit\Framework\TestCase;

class DivisionOperationTest extends TestCase
{
    public function testDivisionByZeroException()
    {
        $this->expectException(DivisionByZeroException::class);
        CompCalc::divide(new ComplexNumber(10, 10), new ComplexNumber(0, 0));
    }

    /**
     * @param ComplexNumber $a
     * @param ComplexNumber $b
     * @param ComplexNumber $expected
     *
     * @throws DivisionByZeroException
     * @dataProvider dataProvider
     */
    public function testComplexNumbersDivision(ComplexNumber $a, ComplexNumber $b, ComplexNumber $expected)
    {
        $this->assertEquals(CompCalc::divide($a, $b), $expected, 'Not equal');
    }

    public function dataProvider()
    {
        return [
            [new ComplexNumber(10, 10), new ComplexNumber(1, 1), new ComplexNumber(10, 0)],
            [new ComplexNumber(10, 10), new ComplexNumber(0, 1), new ComplexNumber(10, -10)],
            [new ComplexNumber(10, 10), new ComplexNumber(1, 0), new ComplexNumber(10, 10)],
            [new ComplexNumber(-10, -10), new ComplexNumber(-5, 10), new ComplexNumber(-0.4, 1.2)],
            [new ComplexNumber(7, 5), new ComplexNumber(1, 3), new ComplexNumber(2.2, -1.6)],
        ];
    }
}