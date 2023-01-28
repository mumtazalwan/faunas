<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Habitat;

class HabitatController extends Controller
{
    public static function allHabitat(){
        return view(
            'habitat.habitat', [
                'habitat' => Habitat::all()
            ]
        );
    }

    public static function detail(Habitat $habitat){
        return view(
            'habitat.detailHabitat', [
                'habitat' => $habitat]
        );
    }
}
