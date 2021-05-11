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
    
    public function locateCar(Request $request)
    {
        $car = new Car();

        $userId = auth()->id();
        $carId = $request->input('idVehicule');
        $startLoc = $request->input('debutLocation');
        $endLoc = $request->input('finLocation');
        $contrat = $request->input('contrat');
        $assurance = $request->input('assurance');
        
        $car->bookingCar($userId, $carId, $startLoc, $endLoc, $assurance, $contrat);
        //return view('reservation');
        return redirect()->route('dashboard')->with('status', 'La réservation de votre location a bien été enregistrée !');
    }
    
}
