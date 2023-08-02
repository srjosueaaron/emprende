<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight flex items-center justify-between">
            {{ __('Gestión de egresados') }}

            <a href="{{ route('egresados.create') }}" 
            class="text-xs bg-gray-800 text-white rounded px-2 py-2"
            >Registrar Nuevo</a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <table class="mb-4 ">
                        @forelse  ($egresados as $egresado)
                            <tr class="border-b border-gray-200 text-sm">
                                <td class="py-2">
                                <div class="max-w-40 mx-auto"> <!-- Ajusta el ancho máximo según tu preferencia -->
                                    <img src="{{ asset('storage').'/'.$egresado->foto }}" 
                                    class="w-full h-auto sm:max-w-20 
                                    md:max-w-25 md:max-h-25
                                    lg:max-w-20 lg:max-h-20" 
                                    alt="{{ $egresado->nombre }}">
                                </div>
                                </td>

                                <td class="px-6 py-4">{{ $egresado->nombre}}</td>

                                <td class="px-6 py-4">
                                    <a href="{{ route('egresados.edit', $egresado->id) }}" 
                                      class="text-indigo-600">Editar</a>
                                </td>

                                <td class="px-6 py-4">
                                    <form action="{{ route('egresados.destroy', $egresado->id) }}" method="POST">
                                      @csrf   
                                      @method('DELETE')
      
                                    <input 
                                      type="submit" 
                                      value="Eliminar" 
                                      class=" bg-gray-800 text-white rounded px-4 py-2" 
                                      onclick="return confirm('¿Estás seguro? Borrarlo podría causarte graves problemas.')"
                                    >
                                  </form>
                                </td>
                                
                            </tr>

                            @empty
                                <tr class="border-b border-gray-200 text-sm">
                                  ¡Upps! Parece que tu sistema es tan nuevo que aún no tienes ningún registro.
                                </tr>

                        @endforelse
                    </table>
                    {{ $egresados->links()}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
