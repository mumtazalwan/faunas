<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;

class AnimalController extends Controller
{
    public static function shortingAnimal(Request $request){

        $idAnimal = $request->idAnimal;
        $dataAnimal = Animal::where('habitats_id', $idAnimal)->get();

        return view(
            'animals.animal', [
                'animal' => $dataAnimal
            ]
        );
    }

    public static function findAnimal_byFounder(Request $request){

        $idAnimal = $request->idAnimal;
        $dataAnimal = Animal::where('founder_id', $idAnimal)->get();

        return view(
            'animals.detailAnimal', [
                'animal' => $dataAnimal
            ]
        );
    }

    public static function detail(Animal $animal){
        return view(
            'animals.detailAnimal', [
                'animal' => $animal]
        );
    }
}
