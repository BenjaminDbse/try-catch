<?php


class Speedometer
{


    public static function convertToMiles(int $km)
    {
        return $km . ' Km équivaut à '. $km * 0.62  . ' miles.';
    }
    public static function convertToKm(int $miles)
    {
        return $miles . ' miles équivaut à ' . $miles * 1.60 . ' Km.';
    }
}