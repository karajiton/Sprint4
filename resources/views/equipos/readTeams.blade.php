@extends('plantilla')
@section('content')
  <div class="flex justify-center mt-8 mb-6">
    <table class="min-w-full max-w-4xl bg-gray-800">
      <thead>
        <tr class="bg-gray-700">
          <th class="px-6 py-3 text-center text-bold font-lg text-white tracking-wider">Nombre del club</th>
          <th class="px-6 py-3 text-center text-bold font-lg text-white tracking-wider">Nº de jugadores</th>
          <th class="px-6 py-3 text-center text-bold font-lg text-white tracking-wider">Año de fundación</th>
          <th class="px-6 py-3 text-center text-bold font-lg text-white tracking-wider">Acciones</th>
        </tr>
      </thead>
      <tbody class="bg-gray-800 divide-y divide-gray-700">
        @foreach($equipos as $equipo)
          <tr class="hover:bg-gray-700">
            <td class="px-6 py-4 whitespace-nowrap text-gray-300">{{ $equipo->nombre }}</td>
            <td class="px-6 py-4 whitespace-nowrap text-gray-300">{{ $equipo->numero_de_jugadores }}</td>
            <td class="px-6 py-4 whitespace-nowrap text-gray-300">{{ $equipo->fecha_fundacion }}</td>
            <td class="px-6 py-4 whitespace-nowrap text-gray-300">
              <a href="{{ route('equipos.edit', $equipo->id) }}" class="text-blue-400 hover:text-blue-400 mr-2">Editar</a>
              <form action="{{ route('equipos.destroy', $equipo->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-red-500 hover:text-red-700">Borrar</button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
