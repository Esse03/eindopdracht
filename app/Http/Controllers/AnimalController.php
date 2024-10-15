<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;

class AnimalController extends Controller
{
    //

    public function index() {
        $animals = Animal::all();

        return view('animals.animals', ['animals' => $animals]);
    }

    public function show($id) {
        $animal = Animal::find($id);
        return view('animals.animal', ['animal' => $animal]);
    }
}
