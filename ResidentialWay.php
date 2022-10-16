<?php

require_once 'HighWay.php';

final class ResidentialWay extends HighWay
{
    public function __construct(array $currentVehicles)
    {
        parent::__construct($currentVehicles, 2, 50);
    }

    public function addVehicle(object $Vehicle): void
    {
        $currentVehicles[] = $Vehicle;
    }
}
