@php
//con el primer nombre se va a dar de alta en la BD y el segundo como se va a ver en la vista
$universidades = [
    'Universidad Estatal del Valle de Ecatepec' => 'Universidad Estatal del Valle de Ecatepec',
    'Universidad Estatal del Valle de Toluca' => 'Universidad Estatal del Valle de Toluca',
    'Universidad Intercultural del Estado de México' => 'Universidad Intercultural del Estado de México',
    'Universidad Politécnica de Atlacomulco' => 'Universidad Politécnica de Atlacomulco',
    'Universidad Politécnica de Atlautla' => 'Universidad Politécnica de Atlautla',
    'Universidad Politécnica de Chimalhuacán' => 'Universidad Politécnica de Chimalhuacán',
    'Universidad Politécnica de Cuautitlán Izcalli' => 'Universidad Politécnica de Cuautitlán Izcalli',
    'Universidad Politécnica de Otzolotepec' => 'Universidad Politécnica de Otzolotepec',
    'Universidad Politécnica de Tecámac' => 'Universidad Politécnica de Tecámac',
    'Universidad Politécnica de Texcoco' => 'Universidad Politécnica de Texcoco',
    'Universidad Politécnica del Valle de México' => 'Universidad Politécnica del Valle de México',
    'Universidad Politécnica del Valle de Toluca' => 'Universidad Politécnica del Valle de Toluca',
    'Universidad Tecnológica del Valle de Toluca' => 'Universidad Tecnológica del Valle de Toluca',
    'Universidad Tecnológica Fidel Velázquez' => 'Universidad Tecnológica Fidel Velázquez',
    'Universidad Tecnológica de Nezahualcóyotl' => 'Universidad Tecnológica de Nezahualcóyotl',
    'Universidad Tecnológica del sur del Estado de México' => 'Universidad Tecnológica del sur del Estado de México',
    'Universidad Tecnológica de Tecámac' => 'Universidad Tecnológica de Tecámac',
    'Universidad Tecnológica de Zinancatepec' => 'Universidad Tecnológica de Zinancatepec',
    'Universidad Mexiquense del Bicentenario' => 'Universidad Mexiquense del Bicentenario',
    'Universidad Digital del Estado de México' => 'Universidad Digital del Estado de México'
];

$profesiones = [
    'Medicina' => 'Medicina',
    'Odontología' => 'Odontología',
    'Veterinaria' => 'Veterinaria',
    'Arquitectura' => 'Arquitectura',
    'Literatura' => 'Literatura',
    'Enfermería' => 'Enfermería',
    'Ciencias Políticas' => 'Ciencias Políticas',
    'Psicología' => 'Psicología',
    'Comunicación y periodismo' => 'Comunicación y periodismo',
    'Biología' => 'Biología',
    'Desarrollo de software' => 'Desarrollo de software',
    'Análisis de investigación de mercado y marketing' => 'Análisis de investigación de mercado y marketing',
    'Contaduría' => 'Contaduría',
    'Derecho' => 'Derecho',
    'Psiquiatría' => 'Psiquiatría',
    'Recursos humanos' => 'Recursos humanos',
    'Gestión de proyectos' => 'Gestión de proyectos',
    'Docencia' => 'Docencia',
    'Economía y finanzas' => 'Economía y finanzas'
];
@endphp

<x-app-layout>
     <x-slot name="header">
         <h2 class="font-semibold text-xl text-gray-800 leading-tight">
             {{ __('Registrar Nuevo Egresado') }}
         </h2>
     </x-slot>
 
     <div class="py-12">
         <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
             <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                 <div class="p-6 text-gray-900">
                    <form   onsubmit="return validateForm()" action="{{route('egresados.store')}}" method="post" enctype="multipart/form-data">
                         @csrf

                         <label class="uppercase text-gray-700 text-xs" for="nombre">Nombre</label>
                         <input type="text"  name="nombre" required maxlength="50" 
                         class="rounded border-gray-200 w-full mb-4">

                         <label class="uppercase text-gray-700 text-xs" for="slug">Slug</label>
                         <input type="text"  name="slug" required maxlength="30" class="rounded border-gray-200 w-full mb-4"> 

                         <label class="uppercase text-gray-700 text-xs" for="experiencia">Años de experiencia</label>
                         <input type="number" name="experiencia" required oninput="validarNumerosPositivos(this)" class="rounded border-gray-200 w-full mb-4"> 

                         <label class="uppercase text-gray-700 text-xs" for="profesion">Profesión</label>
                         <!--<input type="text" name="profesion" required maxlength="15" class="rounded border-gray-200 w-full mb-4">-->
                         <select id="profesion" name="profesion" class="text-sm rounded border-gray-200 w-full mb-4"
                          required>
                          @foreach($profesiones as $valor => $texto)
                          <option value="{{ $valor }}">{{ $texto }}</option>
                          @endforeach
                         </select> 

                         <label class="uppercase text-gray-700 text-xs" for="universidad">Universidad</label>
                         <!--<input type="text" name="universidad" required maxlength="30" class="rounded border-gray-200 w-full mb-4"> -->
                        <select id="universidad" name="universidad" class="text-sm rounded border-gray-200 w-full mb-4" required>
                          @foreach($universidades as $valor => $texto)
                          <option value="{{ $valor }}">{{ $texto }}</option>
                          @endforeach
                        </select>

                         <label class="uppercase text-gray-700 text-xs" for="red1">Facebook</label>
                         <input type="text" name="red1" required maxlength="100" class="rounded border-gray-200 w-full mb-4"> 

                         <label class="uppercase text-gray-700 text-xs" for="red2">WhatsApp</label>
                         <input type="text" name="red2" required maxlength="100" class="rounded border-gray-200 w-full mb-4"> 

                         <div class="mb-4">
                              <label class="uppercase text-gray-700 text-xs" for="foto">Foto</label><br>
                              <div class="flex items-center">
                                <label class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded cursor-pointer">
                                  Elegir archivo
                                  <input type="file" name="foto" accept="image/*" class="hidden" onchange="actualizarNombreArchivo(this)">
                                </label>
                                <span class="ml-2" id="nombre-archivo">Ningún archivo seleccionad</span>
                              </div>
                         </div>

                         <div class="flex justify-between items-center">
                              <a href="{{ route('egresados.index') }}" class="text-indigo-600">Volver</a>
                          
                              <input type="submit" value="Enviar" class="bg-gray-800 text-white rounded px-4 py-2">
                         </div>
                    </form>   
                 </div>
             </div>
         </div>
     </div>

     <script>
          function actualizarNombreArchivo(input) {
            const nombreArchivo = document.getElementById('nombre-archivo');
            if (input.files.length > 0) {
              nombreArchivo.textContent = input.files[0].name;
            } else {
              nombreArchivo.textContent = 'Ningún archivo seleccionado';
            }
          }
        </script>

    <script>
         function validarNumerosPositivos(input) {
         input.value = input.value.replace(/\D/g, '');
         }
    </script>
  

  <script>
    function validateForm() {
        var fileInput = document.getElementById("foto");
        var file = fileInput.files[0];

        if (file && !file.type.startsWith("image/")) {
            alert("Solo se permiten archivos de imagen.");
            return false;
        }
        return true;
    }
</script>
 </x-app-layout>
 