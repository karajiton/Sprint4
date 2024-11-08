@extends('plantilla')
@section('content')
<div class="flex justify-center mt-8 mb-6">
  <table class="min-w-full bg-gray-800 mt-8 mb-6">
    <thead>
        <tr class="bg-gray-700">
          <th class="px-6 py-3 text-center text-bold font-lg text-white tracking-wider">Local</th>
          <th class="px-6 py-3 text-center text-bold font-lg text-white tracking-wider">Visitante</th>
          <th class="px-6 py-3 text-center text-bold font-lg text-white tracking-wider">Resultado</th>
          <th class="px-6 py-3 text-center text-bold font-lg text-white tracking-wider">Fecha</th>
          <th class="px-6 py-3 text-center text-bold font-lg text-white tracking-wider">Acciones</th>
        </tr>
  </thead>
  <tbody class="bg-gray-800 divide-y divide-gray-700">
    @foreach($partidos as $partido)
    <tr class="hover:bg-gray-700">
        <td class="px-6 py-4 whitespace-nowrap text-gray-300">{{ $partido->equipoLocal->nombre }}</td>
        <td class="px-6 py-4 whitespace-nowrap text-gray-300">{{ $partido->equipoVisitante->nombre }}</td>
        <td class="px-6 py-4 whitespace-nowrap text-gray-300">{{ $partido->resultado }}</td>
        <td class="px-6 py-4 whitespace-nowrap text-gray-300">{{ $partido->fecha }}</td>
        <td class="px-6 py-4 whitespace-nowrap text-gray-300">
          <a href="{{ route('partidos.edit', $partido->id) }}" class="text-blue-400 hover:text-blue-400 mr-2">Editar</a>
          <form action="{{ route('partidos.destroy', $partido->id) }}" method="POST" style="display:inline-block;">
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