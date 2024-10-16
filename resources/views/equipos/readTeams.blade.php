@extends('plantilla')
@section('content')
  <table class="min-w-full bg-gray-800">
    <thead>
      <tr class="bg-gray-700">
        <th class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Nombre del club</th>
        <th class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Nº de jugadores</th>
        <th class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Año de fundación</th>
        <th class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Acciones</th>
      </tr>
    </thead>
    <tbody class="bg-gray-800 divide-y divide-gray-700">
      @foreach($equipos as $equipo)
        <tr class="hover:bg-gray-700">
          <td class="px-6 py-4 whitespace-nowrap text-gray-300">{{ $equipo->nombre }}</td>
          <td class="px-6 py-4 whitespace-nowrap text-gray-300">{{ $equipo->numero_de_jugadores }}</td>
          <td class="px-6 py-4 whitespace-nowrap text-gray-300">{{ $equipo->fecha_fundacion }}</td>
          <td class="px-6 py-4 whitespace-nowrap text-gray-300">
            <a href="{{ route('equipos.edit', $equipo->id) }}" class="text-blue-500 hover:text-blue-700 mr-2">Edit</a>
            <form action="{{ route('equipos.destroy', $equipo->id) }}" method="POST" style="display:inline-block;">
              @csrf
              @method('DELETE')
              <button type="submit" class="text-red-500 hover:text-red-700">Delete</button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection