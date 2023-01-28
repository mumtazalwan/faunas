<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Founder;
use App\Models\Animal;

class FounderController extends Controller
{
    public static function allFounder(){
        return view(
            'founder.founder', [
                'founder' => Founder::all()
            ]
        );
    }

    // public static function foundForm(){
    //     return view(
    //         'founder.foundForm', [
    //             'foundForm' => Founder::all()
    //         ]
    //     );
    // }

    public static function foundForm(){
        return view(
            'founder.foundForm', [
                'foundForm' => Animal::all()
            ]
        );
    }

    public static function addFounder(request $request){
        $field = $request->validate([
            'full_name' => 'required|max:255',
            'animal_id' => 'required',
            'birth_date' => 'required',
            'nationality' => 'required',
        ]);
        Founder::create($field);
        return redirect('/founder')->with('success', 'Data successfuly added');
    }

    public static function editFounder(Founder $founder){
        return view(
            'founder.editFounder', [
                'found' => $founder
            ]
        );
    }

    public static function updateFounder(request $request, Founder $founder){
        $field = $request->validate([
            'full_name' => 'required|max:255',
            'animal_id' => 'required',
            'birth_date' => 'required',
            'nationality' => 'required',
        ]);
        Founder::where('id', $founder->id)->update($field);
        return redirect('/founder')->with('success', 'Data successfuly added');
    }

    public function delete(Founder $founder){
        Founder::destroy($founder->id);
        return redirect('/founder')->with('success', 'Data berhasil ditambahkan');
    }
}


