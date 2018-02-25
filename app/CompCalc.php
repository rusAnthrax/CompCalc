<?php

namespace App;

use App\Exceptions\DivisionByZeroException;
use App\Numbers\ComplexNumber;

/**
 * Class CompCalc
 * @package App
 */
class CompCalc
{
    /**
     * @param ComplexNumber $a
     * @param ComplexNumber $b
     *
     * @return ComplexNumber
     */
    public static function subtract(ComplexNumber $a, ComplexNumber $b): ComplexNumber
    {
        return self::add($a, self::negative($b));
    }

    /**
     * @param ComplexNumber $a
     * @param ComplexNumber $b
     *
     * @return ComplexNumber
     */
    public static function add(ComplexNumber $a, ComplexNumber $b): ComplexNumber
    {
        return new ComplexNumber(
            $a->getRealPart() + $b->getRealPart(),
            $a->getImaginaryPart() + $b->getImaginaryPart()
        );
    }

    /**
     * @param ComplexNumber $a
     *
     * @return ComplexNumber
     */
    public static function negative(ComplexNumber $a): ComplexNumber
    {
        return new ComplexNumber(
            -1 * $a->getRealPart(),
            -1 * $a->getImaginaryPart()
        );
    }

    /**
     * @param ComplexNumber $a dividend
     * @param ComplexNumber $b divisor
     *
     * @return ComplexNumber
     *
     * @throws DivisionByZeroException
     */
    public static function divide(ComplexNumber $a, ComplexNumber $b): ComplexNumber
    {
        $conjugate = new ComplexNumber($b->getRealPart(), -1 * $b->getImaginaryPart());

        $dividend = self::multiply($a, $conjugate);
        $divisor = self::multiply($b, $conjugate);

        if (0.0 === $divisor->getRealPart()) {
            throw new DivisionByZeroException(__METHOD__ . ': division by zero');
        }

        return new ComplexNumber(
            $dividend->getRealPart() / $divisor->getRealPart(),
            $dividend->getImaginaryPart() / $divisor->getRealPart()
        );
    }

    /**
     * @param ComplexNumber $a
     * @param ComplexNumber $b
     *
     * @return ComplexNumber
     */
    public static function multiply(ComplexNumber $a, ComplexNumber $b): ComplexNumber
    {
        $realPart = ($a->getRealPart() * $b->getRealPart()) - ($a->getImaginaryPart() * $b->getImaginaryPart());
        $imaginaryPart = ($a->getRealPart() * $b->getImaginaryPart()) + ($b->getRealPart() * $a->getImaginaryPart());

        return new ComplexNumber($realPart, $imaginaryPart);
    }
}
