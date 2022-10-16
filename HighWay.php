<?php

abstract class HighWay
{

    protected array $currentVehicles;

    protected int $nbLane;

    protected int $maxSpeed;

    public function __construct(array $currentVehicles, int $nbLane, int $maxSpeed)
    {
        $this->setCurrentVehicles($currentVehicles);
        $this->setNbLane($nbLane);
        $this->setMaxSpeed($maxSpeed);
    }

    public function getCurrentVehicles()
    {
    }

    public function getNbLane()
    {
    }

    public function getMaxSpeed()
    {
    }

    public function setCurrentVehicles()
    {
    }

    public function setNbLane()
    {
    }

    public function setMaxSpeed()
    {
    }

    abstract public function addVehicle(object $Vehicle);
}
