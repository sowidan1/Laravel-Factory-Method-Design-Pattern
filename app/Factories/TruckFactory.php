<?php

namespace App\Factories;

use App\SubClass\TruckSubClass;

class TruckFactory implements TransportFactory
{
    public function createShipment()
    {
        return new TruckSubClass();
    }
}
