<?php

require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{
    public function __construct(array $currentVehicles)
    {
        parent::__construct($currentVehicles, 1, 10);
    }

    public function addVehicle(object $Vehicle): void
    {
        if (($Vehicle instanceof Bicycle) || ($Vehicle instanceof Skateboard))
            $currentVehicles[] = $Vehicle;
    }
}
