<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Car extends Model{

    use HasFactory;

    public function getCar(){
        $car = DB::table('vehicule')->select('*');
        return $car->get();
    }
}


?>