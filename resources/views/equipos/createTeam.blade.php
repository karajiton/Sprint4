@extends('plantilla')


@section('content')

    <!-- Formulario para crear un nuevo equipo -->
    <form action="{{ route('equipos.store') }}" method="POST" enctype="multipart/form-data" class="max-w-lg mx-auto mt-8 mb-6">
        @csrf <!-- Token CSRF obligatorio para formularios POST en Laravel -->
        
        <!-- Nombre del club -->
        <div class="mb-5">
            <label for="nombre" class="block mb-2 text-bold font-lg text-white dark:text-white">Nombre del club</label>
            <input type="text" id="nombre" name="nombre" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-400 focus:border-blue-400 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-400 dark:focus:border-blue-400" required>
        </div>

        <!-- Número de jugadores -->
        <div class="mb-5">
            <label for="numero_de_jugadores" class="block mb-2 text-bold font-lg text-white dark:text-white">Número de jugadores</label>
            <input type="number" id="numero_de_jugadores" name="numero_de_jugadores" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-400 focus:border-blue-400 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-400 dark:focus:border-blue-400" required>
        </div>

        <!-- Fecha de fundación -->
        <div class="mb-5">
            <label for="fecha_fundacion" class="block mb-2 text-bold font-lg text-white dark:text-white">Fecha de fundación del club</label>
            <input type="date" id="fecha_fundacion" name="fecha_fundacion" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-400 focus:border-blue-400 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-400 dark:focus:border-blue-400" required>
        </div>
        <!-- Botón para enviar el formulario -->
        <button type="submit" class="px-4 py-2 text-white rounded-lg hover:bg-blue-400 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-50" style="background-color: rgb(100, 181, 246);">Guardar equipo</button>
    </form>

@endsection
