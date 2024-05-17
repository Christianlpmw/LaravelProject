<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Juego extends Model
{
    protected $fillable = ['Nombre', 'Genero', 'Precio'];
    public $timestamps = false; //omite el timestamps
    use HasFactory;

    public function caracs()
    {
        return $this -> belongsToMany(Carac::class);
    }

}
 