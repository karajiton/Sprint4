@extends('plantilla')


@section('content')

<form class="max-w-sm mx-auto" action="{{ route('partidos.update', $partido->id) }}" method="POST">
    @csrf <!-- Token CSRF obligatorio para formularios POST en Laravel -->
    @method('PUT') <!-- Especifica que se está utilizando el método PUT para la actualización -->

    <!-- Equipo local -->
    <div class="relative z-0 w-full mb-5 group">
        <select name="equipo_local_id" id="equipo_local_id" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" required>
            <option value="" disabled>Select team</option>
            @foreach($equipos as $equipo)
                <option value="{{ $equipo->id }}" style="background-color: #000000" {{ $equipo->id == $partido->equipo_local_id ? 'selected' : '' }}>{{ $equipo->nombre }}</option>
            @endforeach
        </select>
        <label for="equipo_local_id" class="peer-focus:font-medium absolute text-sm text-white dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Equipo local</label>
    </div>

    <!-- Equipo visitante -->
    <div class="relative z-0 w-full mb-5 group">
        <select name="equipo_visitante_id" id="equipo_visitante_id" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" required>
            <option value="" disabled selected style="background-color: #000000">Seleccione el equipo visitante</option>
            @foreach($equipos as $equipo)
                <option value="{{ $equipo->id }}" style="background-color: #000000" {{ $equipo->id == $partido->equipo_visitante_id ? 'selected' : '' }}>{{ $equipo->nombre }}</option>
            @endforeach
        </select>
        <label for="equipo_visitante_id" class="peer-focus:font-medium absolute text-sm text-white dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Equipo visitante</label>
    </div>

    <!-- Fecha del partido -->
    <div>
        <label for="fecha" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fecha del partido</label>
        <input type="date" id="fecha" name="fecha" value="{{ $partido->fecha }}" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
    </div>

    <!-- Botón para enviar el formulario -->
    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Actualizar partido</button>
</form>

@endsection
