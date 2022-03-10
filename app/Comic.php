<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// il fillable mi compila con il fil del controller (public function store) tutte le colonne della mia tabella nel db
class Comic extends Model
{
    protected $fillable = [
        'title',
        'thumb',
        'price',
        'series',
        'description',
        'sale_date',
    ];
}

