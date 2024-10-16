<?php

// app/Http/Controllers/PartidoController.php
namespace App\Http\Controllers;

use App\Models\Partido;
use App\Models\Equipo;
use Illuminate\Http\Request;

class PartidoController extends Controller
{
    // 1. Mostrar lista de partidos (READ)
    public function index()
    {
        $partidos = Partido::with('equipoLocal', 'equipoVisitante')->get(); // Cargar equipos relacionados
        return view('partidos.index', compact('partidos')); // Enviar a una vista
    }

    // 2. Mostrar formulario de creación (CREATE)
    public function create()
    {
        $equipos = Equipo::all(); // Obtener los equipos para el formulario
        return view('partidos.create', compact('equipos'));
    }

    // 3. Guardar un partido en la base de datos (CREATE)
    public function store(Request $request)
    {
        // Validar el formulario
        $request->validate([
            'equipo_local_id' => 'required|exists:equipos,id',
            'equipo_visitante_id' => 'required|exists:equipos,id',
            'fecha' => 'required|date',
        ]);

        // Crear un nuevo partido
        Partido::create([
            'equipo_local_id' => $request->equipo_local_id,
            'equipo_visitante_id' => $request->equipo_visitante_id,
            'fecha' => $request->fecha,
        ]);

        return redirect()->route('partidos.index')->with('success', 'Partido creado correctamente');
    }

    // 4. Mostrar un partido específico (READ)
    public function show($id)
    {
        $partido = Partido::with('equipoLocal', 'equipoVisitante')->findOrFail($id);
        return view('partidos.show', compact('partido'));
    }

    // 5. Mostrar el formulario de edición (UPDATE)
    public function edit($id)
    {
        $partido = Partido::findOrFail($id);
        $equipos = Equipo::all();
        return view('partidos.edit', compact('partido', 'equipos'));
    }

    // 6. Actualizar un partido en la base de datos (UPDATE)
    public function update(Request $request, $id)
    {
        // Validar el formulario
        $request->validate([
            'equipo_local_id' => 'required|exists:equipos,id',
            'equipo_visitante_id' => 'required|exists:equipos,id',
            'fecha' => 'required|date',
        ]);

        // Buscar el partido y actualizarlo
        $partido = Partido::findOrFail($id);
        $partido->update([
            'equipo_local_id' => $request->equipo_local_id,
            'equipo_visitante_id' => $request->equipo_visitante_id,
            'fecha' => $request->fecha,
        ]);

        return redirect()->route('partidos.index')->with('success', 'Partido actualizado correctamente');
    }

    // 7. Eliminar un partido de la base de datos (DELETE)
    public function destroy($id)
    {
        $partido = Partido::findOrFail($id);
        $partido->delete();

        return redirect()->route('partidos.index')->with('success', 'Partido eliminado correctamente');
    }
}
