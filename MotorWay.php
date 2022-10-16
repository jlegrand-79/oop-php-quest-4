<?php

require_once 'HighWay.php';

final class MotorWay extends HighWay
{

    public function __construct(array $currentVehicles)
    {
        parent::__construct($currentVehicles, 4, 130);
    }
    public function addVehicle(object $Vehicle): void
    {
        if (!($Vehicle instanceof Bicycle) && !($Vehicle instanceof Skateboard))
            $currentVehicles[] = $Vehicle;
    }
}
