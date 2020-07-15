<?php

use PHPUnit\Framework\TestCase;

class TestCalculator extends TestCase
{
    private $calculator;

    public function __construct(Calculator $calculator, string $name = null, array $data = [], $dataName = '')
    {
        $this->calculator = $calculator;
        parent::__construct($name, $data, $dataName);
    }

    public function TestAddition()
    {
        $first = $this->calculator->add(1, 2);
        $seconde = $this->calculator->add(-1, 2);
        $third = $this->calculator->add(-1, 0);

        $this->assertEquals(3, $first, 'Premier test d’addition');
        $this->assertEquals(1, $seconde, 'Deuxième test d’addition');
        $this->assertEquals(-1, $third, 'Troisième test d’addition');
    }

    public function TestSubtraction()
    {
        $first = $this->calculator->sub(1, 2);
        $seconde = $this->calculator->sub(-1, 2);
        $third = $this->calculator->sub(-1, 1);

        $this->assertEquals(1, $first, 'Premier test de soustraction');
        $this->assertEquals(-3, $seconde, 'Deuxième test de soustraction');
        $this->assertEquals(0, $third, 'Troisième test de soustraction');
    }

    public function TestDivision()
    {
        $first = $this->calculator->div(100, 2);
        $seconde = $this->calculator->div(80, -2);
        $third = $this->calculator->div(-1, 1);

        $this->assertEquals(50, $first, 'Premier test de division');
        $this->assertEquals(-40, $seconde, 'Deuxième test de division');
        $this->assertEquals(-1, $third, 'Troisième test de division');
    }

    public function TestMultiplication()
    {
        $first = $this->calculator->mul(100, 2);
        $seconde = $this->calculator->mul(80, -2);
        $third = $this->calculator->mul(-1, 1);

        $this->assertEquals(200, $first, 'Premier test de multiplication');
        $this->assertEquals(-160, $seconde, 'Deuxième test de multiplication');
        $this->assertEquals(-1, $third, 'Troisième test de multiplication');
    }

}