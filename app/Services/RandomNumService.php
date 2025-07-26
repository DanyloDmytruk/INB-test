<?php
namespace App\Services;

class RandomNumService
{
    public static function randomFloat(float $min, float $max, int $precision = 2): float
    {
        $scale = pow(10, $precision);
        return mt_rand($min * $scale, $max * $scale) / $scale;
    }
}
