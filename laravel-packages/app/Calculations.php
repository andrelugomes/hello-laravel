<?php


namespace App;


use Andrelugomes\Calculate\Facades\Calculate;

class Calculations
{

    public function doCalculations(int $value): int
    {
        Calculate::add($value);
        $result = Calculate::subtract(1);

        return $result->getResult();
    }

}
