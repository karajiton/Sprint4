<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{

    use HasFactory;

    protected $fillable = [
        'nombre',              // Campo nombre
        'numero_de_jugadores',    // Campo número de jugadores
        'fecha_fundacion',     // Campo fecha de fundación
        
    ];

    
public function partidosLocal()
{
    return $this->hasMany(Partido::class, 'equipo_local_id');
}

public function partidosVisitante()
{
    return $this->hasMany(Partido::class, 'equipo_visitante_id');
}

}
