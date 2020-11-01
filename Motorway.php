<?php

require_once 'HighWay.php';

final class Motorway extends HighWay
{

    public function __construct()
    {
        parent::__construct(4, 130);
    }

    public function addVehicle($vehicle)
    {
        if ($vehicle instanceof Bicycle) {
            return 'Go back!';
        } else {
            $this -> currentVehicles [] = $vehicle;
            return $this -> currentVehicles;
        }
    }
}
