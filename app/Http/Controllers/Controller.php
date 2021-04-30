<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Car;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $car = new Car();

        $listCar = $car->getCar();
        return view('dashboard')->with('listCar', $listCar);
    }

    public function showDetailCar(Request $request)
    {
        $car = new Car();

        $id = $request->input('id');

        $oneCar = $car->getCarDetail($id);
        return view('detail')->with('oneCar', $oneCar);
    }

    public function locateCar()
    {
        
    }
}
