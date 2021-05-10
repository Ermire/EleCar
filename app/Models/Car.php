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
            ->select('*');
        return $car->get();
    }

    public function getCarDetail($id)
    {
        $car = DB::table('vehicule')
            ->join('marque', 'vehicule.marque_IdMarque', '=', 'marque.marqueId')
            ->join('typevehicule', 'vehicule.typeVehicule_idtypeVehicule', '=', 'typevehicule.idtypeVehicule')
            ->join('classe', 'vehicule.classe_IdClasse', '=', 'classe.classeId')
            ->select('*')
            ->where('vehiculeId', '=', $id);
        return $car->get();
    }

    public function bookingCar($idVoiture, $idUtilisateur, $locDepart, $locRetour)
    {
        DB::insert('insert into location (utilisateur_idUtilisateur, vehicule_idVehicule, locDateDepart, locDateRetour, locAssurance ) values (' . $idVoiture . ', ' . $idUtilisateur . ', ' . $locDepart . ', ' . $locRetour . ', "NoCasseProtec")');
    }
}
