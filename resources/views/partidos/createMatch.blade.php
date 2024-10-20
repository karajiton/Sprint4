@extends('plantilla')

@section('content')

<form class="max-w-lg mx-auto mt-8 mb-6" action="{{ route('partidos.store') }}" method="POST">
    @csrf <!-- Token CSRF obligatorio para formularios POST en Laravel -->

    <!-- Equipo local -->
    <div class="relative z-0 w-full mb-5">
        <select name="equipo_local_id" id="equipo_local_id" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-400 focus:outline-none focus:ring-0 focus:border-blue-400 peer" required>
            <option value="" disabled selected style="background-color: rgb(162, 190, 213)">Selecciona el equipo local</option>
            @foreach($equipos as $equipo)
                <option value="{{ $equipo->id }}" style="background-color: rgb(162, 190, 213)">{{ $equipo->nombre }}</option>
            @endforeach
        </select>
        <label for="equipo_local_id" class="peer-focus:font-medium absolute text-sm text-white dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-400 peer-focus:dark:text-blue-400 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Equipo local</label>
    </div>

    <!-- Equipo visitante -->
    <div class="relative z-0 w-full mb-5">
        <select name="equipo_visitante_id" id="equipo_visitante_id" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-400 focus:outline-none focus:ring-0 focus:border-blue-400 peer" required>
            <option value="" disabled selected style="background-color: rgb(162, 190, 213);">Selecciona el equipo visitante</option>
            @foreach($equipos as $equipo)
                <option value="{{ $equipo->id }}" style="background-color: rgb(162, 190, 213)">{{ $equipo->nombre }}</option>
            @endforeach
        </select>
        <label for="equipo_visitante_id" class="peer-focus:font-medium absolute text-sm text-white dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-400 peer-focus:dark:text-blue-400 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Equipo visitante</label>
    </div>
    

    <!-- Fecha del partido -->
    <div class="mb-5">
        <label for="fecha" class="block mb-2 text-sm text-white text-left">Fecha del partido</label>
        <input type="date" id="fecha" name="fecha" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-400 focus:border-blue-400 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-400 dark:focus:border-blue-400" required>
    </div>
    
    <!-- Botón para enviar el formulario -->
    <button type="submit" class="px-4 py-2 text-white rounded-lg hover:bg-blue-400 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-50" style="background-color: rgb(100, 181, 246);">Guardar partido</button>
    

@endsection
