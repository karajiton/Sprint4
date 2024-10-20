<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{

    use HasFactory;

    protected $fillable = [
        'equipo_local_id',
        'equipo_visitante_id',
        'fecha',
    ];

    // app/Models/Partido.php
public function equipoLocal()
{
    return $this->belongsTo(Equipo::class, 'equipo_local_id');
}

public function equipoVisitante()
{
    return $this->belongsTo(Equipo::class, 'equipo_visitante_id');
}

}
