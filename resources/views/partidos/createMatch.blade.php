@extends('plantilla')

@section('content')
    


  
<form class="max-w-sm mx-auto">
    <div class="relative z-0 w-full mb-5 group">
        <select name="status" id="status" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" required>
            <option value="Pendiente" style="background-color: #000000">Pendiente</option>
            <option value="En proceso" style="background-color: #000000">En proceso</option>
            <option value="Terminado" style="background-color: #000000">Terminado</option>
        </select>
        <label for="status" class="peer-focus:font-medium absolute text-sm text-white dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Equipo local</label>
    </div>
    <div class="relative z-0 w-full mb-5 group">
        <select name="status" id="status" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" required>
            <option value="Pendiente" style="background-color: #000000">Pendiente</option>
            <option value="En proceso" style="background-color: #000000">En proceso</option>
            <option value="Terminado" style="background-color: #000000">Terminado</option>
        </select>
        <label for="status" class="peer-focus:font-medium absolute text-sm text-white dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Equipo Visitante</label>
    </div>
    <div>
        <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fecha del partido</label>
        <input type="date" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    </div>
  </form>
  
  @endsection  