<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use function Laravel\Prompts\multisearch;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $searchTerm = $request->query('query');
        Log::info('Search Term:', ['query' => $searchTerm]); // Log the search term

        if ($request->has('query')) {
            $animals = Animal::where('name', 'like', '%' . $searchTerm . '%')->get();
        } else {
            $animals = Animal::all();
        }

        return view('animals.index', compact('animals'));
    }

    public function search(Request $request)
    {
        $animals = Animal::where('name', 'like', '%' . $request->search . '%')->get();
        return view('animals.index', compact('animals'));
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
        $animal->image = $request->file('image')->storePublicly('animals', 'public');
        $animal->user_id = auth()->user()->id;
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
        $animal = Animal::find($id);
        return view('animals.edit', compact('animal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $animal = Animal::find($id);
        $animal->name = $request->name;
        $animal->breed = $request->breed;
        $animal->description = $request->description;
        $animal->image = $request->image;
        $animal->save();
        return redirect()->route('profile.index')->with('success', 'Animal updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $animal = Animal::find($id);
        $animal->delete();
        return redirect()->route('profile.index')->with('success', 'Animal deleted successfully');
    }
}
