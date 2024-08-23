<?php

namespace App\SubClass;

class TruckSubClass implements SubClassFactory
{
    public function proccessShippment()
    {
        return 'Truck Shipment With Truck';
    }
}
