@extends('plantilla')
@section('content')

   <!-- Formulario para actualizar un equipo existente -->
   <form action="{{ route('equipos.update', $equipo->id) }}" method="POST" enctype="multipart/form-data" class="max-w-lg mx-auto">
    @csrf <!-- Token CSRF obligatorio para formularios POST en Laravel -->
    @method('PUT') <!-- Cambiar el método del formulario a PUT para la actualización -->
    
    <!-- Nombre del club -->
    <div class="mb-5">
        <label for="nombre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre del club</label>
        <input type="text" id="nombre" name="nombre" value="{{ old('nombre', $equipo->nombre) }}" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
    </div>

    <!-- Número de jugadores -->
    <div class="mb-5">
        <label for="numero_de_jugadores" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Número de jugadores</label>
        <input type="number" id="numero_de_jugadores" name="numero_de_jugadores" value="{{ old('numero_de_jugadores', $equipo->numero_de_jugadores) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
    </div>

    <!-- Fecha de fundación -->
    <div class="mb-5">
        <label for="fecha_fundacion" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fecha de fundación del club</label>
        <input type="date" id="fecha_fundacion" name="fecha_fundacion" value="{{ old('fecha_fundacion', $equipo->fecha_fundacion) }}" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
    </div>

    <!-- Botón para enviar el formulario -->
    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Actualizar equipo</button>
</form>

@endsection