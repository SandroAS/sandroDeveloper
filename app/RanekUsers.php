<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RanekUsers extends Model
{
    protected $fillable = [
        'nome',
        'email',
        'senha',
        'cep',
        'rua',
        'numero',
        'bairro',
        'cidade',
        'estado',
    ];
}
