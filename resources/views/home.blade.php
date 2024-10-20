@extends('plantilla')
@section('content')
<div class="border-gray-200 dark:bg-blue-400" style="background-color: rgb(255, 255, 255); padding-bottom: 10px; padding-top: 5px;">
    <h2 class="font-bold text-lg text-center" style="color: rgb(100, 181, 246);">Crea y gestiona tus torneos de Ultimate Frisbee</h2>
    <h3 class="text-white text-sm" style="color: rgb(100, 181, 246);">Todo lo que necesitas para llevar tu torneo de Ultimate al siguiente nivel</h3> 
</div>
<div class="flex justify-center items-center mt-8">
    <table class="border-separate border-gray-700 rounded-lg" style="border-spacing: 0ch; width: 80%;">
      <tr>
        <td class="p-4" style="background-color: rgb(100,181,246); border: 3px solid rgb(55, 65, 81); width: 50%;">
          <div class="text-white text-center">
            <a href="{{route('equipos.create')}}" class="block">
            <div class="flex items-center justify-center space-x-2">
              <svg class="w-8 h-8 bg-[rgb(100,181,246)]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M5.833 5a5 5 0 0 1 3-1h6.334a5 5 0 0 1 3 1L21.1 7.2a1 1 0 0 1 .268 1.296l-2 3.5a1 1 0 0 1-1.382.361l-.986-.59V19a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1v-7.234l-.985.591a1 1 0 0 1-1.383-.36l-2-3.5A1 1 0 0 1 2.9 7.2L5.833 5ZM14 5h-4c0 .425.223.933.645 1.355.422.423.93.645 1.355.645.425 0 .933-.222 1.355-.645.423-.422.645-.93.645-1.355Z" clip-rule="evenodd"/>
              </svg>      
            </div>
         <h3 class="text-sm font-semibold">Añade tus equipos</h3>
            <p class="text-sm mt-2">Organiza todos los equipos participantes de forma rápida y eficiente.</p>
          </div>
        </td>
  
        <td class="p-4" style="background-color: rgb(100,181,246); border: 3px solid rgb(55, 65, 81); width: 50%;">
          <div class="text-white text-center">
            <a href="{{route('partidos.create')}}" class="block">
            <div class="flex items-center justify-center space-x-2">
              <svg class="w-8 h-8 bg-[rgb(100,181,246)]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M5 5a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1 2 2 0 0 1 2 2v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V7a2 2 0 0 1 2-2ZM3 19v-7a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Zm6.01-6a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm-10 4a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Z" clip-rule="evenodd"/>              </svg>      
              </div>
              <h3 class="text-sm font-semibold">Crea tus partidos</h3>
            <p class="text-sm mt-2">Programa partidos fácilmente con detalles de fecha y equipos.</p>
          </div>
        </td>
      </tr>
  
      <tr>
        <td colspan="2" class="p-4" style="background-color: white; border: 3px solid rgb(55, 65, 81);">
          <div style="color: rgb(100, 181, 246);" class="text-center">
            <div class="flex items-center justify-center space-x-2">
              <svg class="w-8 h-8 bg-[rgb(100,181,246)]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M5 5a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1 2 2 0 0 1 2 2v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V7a2 2 0 0 1 2-2ZM3 19v-7a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Zm6.01-6a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm-10 4a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Z" clip-rule="evenodd"/>              </svg>      
              </div>
              <h3 class="text-sm font-semibold">Genera automáticamente el calendario de tu torneo</h3>
            <p class="text-sm mt-2">Obtén un cronograma visual completo del torneo con todos los partidos y fechas.</p>
          </div>
        </td>
      </tr>
    </table>
  </div>
  
    


@endsection
