<?php

namespace App\Factories;

use App\SubClass\ShipSubClass;
use App\SubClass\TruckSubClass;

class ShipFactory implements TransportFactory
{
    public function createShipment()
    {
        return new ShipSubClass();
    }
}
