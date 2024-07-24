<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    protected $fillable = [

        'nome_comune',
        'nome_scientifico',
        'specie',
        'data_di_nascita',
        'peso',
        'altezza',
        'sesso',
        'colore',
        'habitat',
        'dieta',
        'stato_di_conservazione',
        'provenienza',
        'microchip_id'



    ];
}
