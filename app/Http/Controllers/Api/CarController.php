<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CarResource;
use App\Models\Car;

class CarController extends Controller
{
    public function index()
    {
        return CarResource::collection(Car::all());
    }

    public function show(Car $car)
    {
        return new CarResource($car);
    }
}
