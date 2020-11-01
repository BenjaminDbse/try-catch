<?php
abstract class HighWay
{
/**
* @var array
*/
protected $currentVehicles = [];

/**
* @var integer
*/
private $nbLane;

/**
* @var integer
*/
private $maxSpeed;

public function __construct (int $nbLane, int $maxSpeed)
{
$this -> setNbLane = $nbLane;
$this -> setMaxSpeed = $maxSpeed;
}

public function getCurrentVehicles()
{
return $this->currentVehicles;
}

public function setCurrentVehicles(int $currentVehicles)
{
$this -> currentVehicles [] = $currentVehicles;
return $this->currentVehicles;
}

public function getNbLane(): int
{
return $this->nbLane;
}

public function setNbLane(int $nbLane)
{
$this -> nbLane = $nbLane;
return $this->nbLane;
}

public function getMaxSpeed(): int
{
return $this->maxSpeed;
}

public function setMaxSpeed(int $maxSpeed)
{
$this -> maxSpeed = $maxSpeed;
return $this->maxSpeed;
}

abstract protected function addVehicle ($vehicle);
}