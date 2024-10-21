<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $animals = Animal::all();
        return view('animals.animals', compact('animals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('animals.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $animal = new Animal;

        $animal->name = $request->name;
        $animal->breed = $request->breed;
        $animal->description = $request->description;
        $animal->image = $request->image;
        $animal->created_by = auth()->user()->id;
        $animal->save();
        return redirect()->route('home')->with('success', 'Animal created successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //

        $animal = Animal::find($id);
        return view('animals.show', compact('animal'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
