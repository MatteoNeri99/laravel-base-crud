<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $animals=Animal::all();
        return view('animals', compact('animals'));
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $animal= Animal::findOrFail($id);

        return view ('show' , compact('animal'));

    }


}
