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

    public function edit( Animal $animal)
    {


        return view ('edit', compact('animal'));

    }


    public function update(Request $request,Animal $animal)
    {

        $data=$request->all();

        // $animal->nome_comune = $data['nome_comune'];
        // $animal->nome_scientifico = $data['nome_scientifico'];
        // $animal->specie = $data['specie'];
        // $animal->data_di_nascita = $data['data_di_nascita'];
        // $animal->peso = $data['peso'];
        // $animal->altezza = $data['altezza'];
        // $animal->sesso = $data['sesso'];
        // $animal->colore = $data['colore'];
        // $animal->habitat = $data['habitat'];
        // $animal->dieta = $data['dieta'];
        // $animal->stato_di_conservazione = $data['stato_di_conservazione'];
        // $animal->provenienza = $data['provenienza'];
        // $animal->microchip_id = $data['microchip_id'];
        // $animal->update();

        $animal->update($data);

        return redirect()->route('animal.show' , $animal);

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

    public function destroy(Animal $animal){

        $animal->delete();

        return redirect()->route('animal.index');

    }


}
