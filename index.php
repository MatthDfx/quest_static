<?php

class Speedometer
{
    public const DISTANCE_CONVERSION = 0.621;
    public int $km;
    public int $miles;

    public static function convertKmToMiles(int $km)
    {
        return $km * self::DISTANCE_CONVERSION;
    }
};
echo Speedometer::convertKmToMiles(10);
