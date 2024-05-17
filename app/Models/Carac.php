<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carac extends Model
{
    
    protected $fillable = ['Empresa', 'Desarrolladora', 'Year'];
    public $timestamps = false; //omite el timestamps
    use HasFactory;

    public function juegos(){
        return $this -> belongsToMany(Juego::class);
    }
    
}
