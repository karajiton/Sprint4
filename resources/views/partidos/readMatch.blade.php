@extends('plantilla')
@section('content')
<table class="min-w-full bg-gray-800">
<thead class="bg-gray-800 divide-y divide-gray-700">
    
      <tr class="hover:bg-gray-700">
        <th class="px-6 py-4 whitespace-nowrap text-gray-300">Local</td>
        <th class="px-6 py-4 whitespace-nowrap text-gray-300">Visitante</td>
        <th class="px-6 py-4 whitespace-nowrap text-gray-300">Fecha</td>
        <th class="px-6 py-4 whitespace-nowrap text-gray-300">Acciones</td>

        
        </tr>
  </thead>
  <tbody class="bg-gray-800 divide-y divide-gray-700">
    @foreach($partidos as $partido)
    <tr class="hover:bg-gray-700">
        <td class="px-6 py-4 whitespace-nowrap text-gray-300">{{ $partido->equipoLocal->nombre }}</td>
        <td class="px-6 py-4 whitespace-nowrap text-gray-300">{{ $partido->equipoVisitante->nombre }}</td>
        <td class="px-6 py-4 whitespace-nowrap text-gray-300">{{ $partido->fecha }}</td>
        
        <td class="px-6 py-4 whitespace-nowrap text-gray-300">
          <a href="{{ route('partidos.edit', $partido->id) }}" class="text-blue-500 hover:text-blue-700 mr-2">Edit</a>
          <form action="{{ route('partidos.destroy', $partido->id) }}" method="POST" style="display:inline-block;">
              @csrf
              @method('DELETE')
              <button type="submit" class="text-red-500 hover:text-red-700">Delete</button>
          </form>
        </td>
    </tr>
    @endforeach
</tbody>