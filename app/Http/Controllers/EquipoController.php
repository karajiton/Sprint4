<?php

// app/Http/Controllers/EquipoController.php
namespace App\Http\Controllers;

use App\Models\Equipo;
use Illuminate\Http\Request;

class EquipoController extends Controller
{
    // 1. Mostrar lista de equipos (READ)
    public function index()
    {
        $equipos = Equipo::all(); // Obtener todos los equipos
        return view('equipos.index', compact('equipos')); // Enviar a una vista
    }

    // 2. Mostrar formulario de creación (CREATE)
    public function create()
    {
        return view('equipos.create'); // Retorna un formulario de creación
    }

    // 3. Guardar un equipo en la base de datos (CREATE)
    public function store(Request $request)
    {
        // Validar el formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
        ]);

        // Crear un nuevo equipo
        Equipo::create([
            'nombre' => $request->nombre,
        ]);

        return redirect()->route('equipos.index')->with('success', 'Equipo creado correctamente');
    }

    // 4. Mostrar un equipo específico (READ)
    public function show($id)
    {
        $equipo = Equipo::findOrFail($id);
        return view('equipos.show', compact('equipo'));
    }

    // 5. Mostrar el formulario de edición (UPDATE)
    public function edit($id)
    {
        $equipo = Equipo::findOrFail($id);
        return view('equipos.edit', compact('equipo'));
    }

    // 6. Actualizar un equipo en la base de datos (UPDATE)
    public function update(Request $request, $id)
    {
        // Validar el formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
        ]);

        // Buscar el equipo y actualizarlo
        $equipo = Equipo::findOrFail($id);
        $equipo->update([
            'nombre' => $request->nombre,
        ]);

        return redirect()->route('equipos.index')->with('success', 'Equipo actualizado correctamente');
    }

    // 7. Eliminar un equipo de la base de datos (DELETE)
    public function destroy($id)
    {
        $equipo = Equipo::findOrFail($id);
        $equipo->delete();

        return redirect()->route('equipos.index')->with('success', 'Equipo eliminado correctamente');
    }
}
