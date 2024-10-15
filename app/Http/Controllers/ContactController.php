<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show() {
        return view('contact');
    }
    public function showDetails(string $company) {
        return view('contact-details', ['company' => $company]);
    }
}
