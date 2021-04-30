<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class ShowCarController extends Controller
{

    public function index()
    {
        $car = new Car();

        $listCar = $car->getCar();
        return view('detail')->with('listCar', $listCar);
    }

    public function showDetailCar()
    {
    }
}
