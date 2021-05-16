<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Car extends Model
{

    use HasFactory;

    public function getCar()
    {
        $car = DB::table('vehicule')
            ->join('marque', 'vehicule.marque_IdMarque', '=', 'marque.marqueId')
            ->join('typevehicule', 'vehicule.typeVehicule_idtypeVehicule', '=', 'typevehicule.idtypeVehicule')
            ->join('classe', 'vehicule.classe_IdClasse', '=', 'classe.classeId')
            ->where('voitureEnLocation', '=', 0)
            ->select('*');
        return $car->get();
    }

    public function getCarDetail($id)
    {
        $car = DB::table('vehicule')
            ->join('marque', 'vehicule.marque_IdMarque', '=', 'marque.marqueId')
            ->join('typevehicule', 'vehicule.typeVehicule_idtypeVehicule', '=', 'typevehicule.idtypeVehicule')
            ->join('classe', 'vehicule.classe_IdClasse', '=', 'classe.classeId')
            ->where('vehiculeId', '=', $id)
            ->select('*');
        return $car->get();
    }

    public function bookingCar($idUser, $idCar, $locStart, $locReturn, $assurance)
    {
        DB::insert('insert into location (utilisateur_idUtilisateur, vehicule_idVehicule, locDateDepart, locDateRetour, locAssurance ) values (' . $idUser . ', ' . $idCar . ', "' . $locStart . '", "' . $locReturn . '", "' . $assurance . '")');
        DB::table('vehicule')
            ->where('vehiculeId', $idCar)
            ->update(['voitureEnLocation' => 1]);
    }

    public function classeCar()
    {
        $car = DB::table('classe')
            ->select('*');
        return $car->get();
    }

    public function marqueCar()
    {
        $car = DB::table('marque')
            ->select('*');
        return $car->get();
    }

    public function addNewCar($modelCar, $etatCar, $kmCar, $anneeCar, $descriptionCar, $prixCar, $marqueCar, $classeCar, $typeCar, $imageCar)
    {
        DB::insert('insert into vehicule (vehiculeModele, vehiculeEtat, vehiculeKm, vehiculeAnnee, vehiculeDesc, vehiculePrixLoc, typeVehicule_idtypeVehicule, marque_idMarque, classe_idClasse, vehiculeImage, voitureEnLocation)values ("' . $modelCar . '", ' . $etatCar . ',' . $kmCar . ',' . $anneeCar . ',"' . $descriptionCar . '",' . $prixCar . ',' . $typeCar . ',' . $marqueCar . ',' . $classeCar . ',"' . $imageCar . '", 0)');
    }
}
