<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AdminController extends Controller
{
    //
    public function index()
    {
        return view('admin.home');
    }

    public function users(Request $request)
    {
        $searchTerm = $request->query('query');
        Log::info('Search Term:', ['query' => $searchTerm]);

        if ($request->has('query')) {
            $users = User::where('name', 'like', '%' . $searchTerm . '%')->get();
        } else {
            $users = User::all();
        }

return view('admin.users', compact('users'));
    }
}
