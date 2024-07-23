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
    public function create()
    {


        return view ('create');

    }

            /**
     * Display the specified resource.
     */
    public function store(Request $request)
    {
        $data=$request->all();


        $newAnimal= new Animal();
        $newAnimal->nome_comune = $data['nome_comune'];
        $newAnimal->nome_scientifico = $data['nome_scientifico'];
        $newAnimal->specie = $data['specie'];
        $newAnimal->data_di_nascita = $data['data_di_nascita'];
        $newAnimal->peso = $data['peso'];
        $newAnimal->altezza = $data['altezza'];
        $newAnimal->sesso = $data['sesso'];
        $newAnimal->colore = $data['colore'];
        $newAnimal->habitat = $data['habitat'];
        $newAnimal->dieta = $data['dieta'];
        $newAnimal->stato_di_conservazione = $data['stato_di_conservazione'];
        $newAnimal->provenienza = $data['provenienza'];
        $newAnimal->microchip_id = $data['microchip_id'];
        $newAnimal->save();

        return redirect()->route('animal.show' , $newAnimal->id);


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
