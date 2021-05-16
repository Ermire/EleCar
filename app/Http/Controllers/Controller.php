<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $car = new Car();
        $user = new User();

        $userId = auth()->id();
        $userType = $user->getUserType($userId);
        $listCar = $car->getCar();
        return view('dashboard')->with('listCar', $listCar)->with('userType', $userType);
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
        $assurance = $request->input('assurance');
        $request->validate([
            'terms' => 'accepted'
        ]);

        $car->bookingCar($userId, $carId, $startLoc, $endLoc, $assurance);
        //return view('reservation');
        return redirect()->route('dashboard')->with('status', 'La réservation de votre location a bien été enregistrée !');
    }

    public function retrieveCarParameters()
    {
        $car = new Car();
        $listClasse = $car->classeCar();
        $listMarque = $car->marqueCar();
        return view('ajouter')->with('listClasse', $listClasse)->with('listMarque', $listMarque);
    }

    public function userInfos(){
        $user = new User();
        $userInfos = $user->getUser();
        return view('account')->with('userInfos', $userInfos);
    }

    public function addCar(Request $request)
    {
        $car = new Car();
        
        $etatCar = $request->input('etat');
        $modelCar = $request->input('modele');
        $kmCar = $request->input('kilometre');
        $anneeCar = $request->input('annee');
        $descriptionCar = $request->input('description');
        $prixCar = $request->input('prix');
        $classeCar = $request->input('classe');
        $marqueCar = $request->input('marque');
        $typeCar = $request->input('type');
        
        $nomImage = $modelCar.'.jpg';
        $imageCar = $request->file('image');
        $imageCar->storeAs('', $nomImage, 'custom');


        $car->addNewCar($modelCar, $etatCar, $kmCar, $anneeCar, $descriptionCar, $prixCar, $classeCar, $marqueCar, $typeCar, $nomImage);
        return redirect()->route('dashboard')->with('status', 'La voiture a bien été ajoutée !');
    }
}
