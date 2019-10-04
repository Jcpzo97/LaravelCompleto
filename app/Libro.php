<?php

namespace App;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    public function categoria(){
        return  $this->belongsTo(Categoria::class);//pertenece a una categoria
    }
    
    public function etiquetas(){
        return $this->belongsToMany(Etiqueta::class); //muchos a muchos
    }
    
    protected $dates = ['fecha']; 
}
