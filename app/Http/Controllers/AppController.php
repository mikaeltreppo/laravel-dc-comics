<?php

namespace App\Http\Controllers;
use App\Models\Comic;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function cards() {
        $comics = Comic::all();
        return view('layouts/app', compact('comics'));}

     
}
