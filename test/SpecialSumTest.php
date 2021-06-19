<?php

namespace Test;

use App\SpecialSum;
use PHPUnit\Framework\TestCase;

class SpecialSumTest extends TestCase
{
    protected $SpecialSum;

    public function inputNumbers()
    {
        return [
            [1, 3, 6],
            [2, 3, 10],
            [4, 10, 2002],
            [10, 10, 167960],
            [20, 20, 131282408400],
            [30, 30, 114449595062769120],
        ];
    }

    /**
     * @test
     * @dataProvider inputNumbers
     */
    public function testCalculate($x, $y, $result)
    {
        $this->SpecialSum = SpecialSum::start();
        $this->assertEquals( (int)$result, $this->SpecialSum->calculate($x, $y));
    }

}