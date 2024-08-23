<?php

namespace App\Http\Controllers;

use App\Factories\ShipFactory;
use App\Factories\TruckFactory;
use Illuminate\Http\Request;

class ShipmentsController extends Controller
{
    public function shipment($type)
    {
        $typeOfShipment = match (request('type')) {
            'ship' => new ShipFactory(),
            'truck' => new TruckFactory(),
            default => 'Invalid Shipment Type',
        };
        return ($typeOfShipment)->createShipment()->proccessShippment();
    }
}
