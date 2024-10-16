@extends('plantilla')
@section('content')
<tbody class="bg-gray-800 divide-y divide-gray-700">
    
      <tr class="hover:bg-gray-700">
        <td class="px-6 py-4 whitespace-nowrap text-gray-300">Local</td>
        <td class="px-6 py-4 whitespace-nowrap text-gray-300">Visitante</td>
        <td class="px-6 py-4 whitespace-nowrap text-gray-300">Fecha</td>
        
        <td class="px-6 py-4 whitespace-nowrap text-gray-300">
          <a href="#" class="text-blue-500 hover:text-blue-700 mr-2">Edit</a>
          <a href="#" class="text-red-500 hover:text-red-700">Delete</a>
        </td>
      </tr>
   
  </tbody>
@endsection