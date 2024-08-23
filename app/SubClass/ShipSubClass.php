<?php

namespace App\SubClass;

class ShipSubClass implements SubClassFactory
{
    public function proccessShippment()
    {
        return 'Truck Shipment With Ship';
    }
}
