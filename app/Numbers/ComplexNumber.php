<?php

namespace App\Numbers;

/**
 * Class ComplexNumber
 *
 * @package App\Numbers
 */
class ComplexNumber
{
    /**
     * Real part of the ComplexNumber
     *
     * @var
     */
    private $realPart;

    /**
     * Imaginary part of the ComplexNumber
     *
     * @var
     */
    private $imaginaryPart;

    /**
     * ComplexNumber constructor.
     *
     * @param $realPart
     * @param $imaginaryPart
     */
    public function __construct($realPart, $imaginaryPart)
    {
        $this->realPart = $realPart;
        $this->imaginaryPart = $imaginaryPart;
    }

    /**
     * Get the real part of the ComplexNumber
     *
     * @return float
     */
    public function getRealPart(): float
    {
        return $this->realPart;
    }

    /**
     * Set the real part of the ComplexNumber
     *
     * @param mixed $realPart
     *
     * @return ComplexNumber
     */
    public function setRealPart($realPart): ComplexNumber
    {
        $this->realPart = $realPart;

        return $this;
    }

    /**
     * Get the imaginary part of the ComplexNumber
     *
     * @return float
     */
    public function getImaginaryPart(): float
    {
        return $this->imaginaryPart;
    }

    /**
     * Set the imaginary part of the ComplexNumber
     *
     * @param mixed $imaginaryPart
     *
     * @return ComplexNumber
     */
    public function setImaginaryPart($imaginaryPart): ComplexNumber
    {
        $this->imaginaryPart = $imaginaryPart;

        return $this;
    }


}
