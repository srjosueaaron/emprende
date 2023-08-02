<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Egresado;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;


class EgresadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //barra de busqueda
        $texto = trim($request->get('texto'));

        $egresados = DB::table('egresados')
            ->select('id', 'nombre', 'slug', 'foto', 'experiencia', 'profesion', 'universidad', 'red1', 'red2')
            ->where('nombre', 'LIKE', '%' . $texto . '%')
            ->orWhere('profesion', 'LIKE', '%' . $texto . '%')
            ->orderBy('profesion', 'asc')

            ->paginate(10);
        return view('egresados.index', compact('egresados', 'texto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('egresados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function store(Request $request)
    {
        $egresado = new Egresado;
        $egresado->nombre = $request->input('nombre');
        $egresado->experiencia = $request->input('experiencia');
        $egresado->profesion = $request->input('profesion');
        $egresado->universidad = $request->input('universidad');
        $egresado->red1 = $request->input('red1');
        $egresado->red2 = $request->input('red2');
    
        // Generar un slug único a partir del nombre
        $slug = Str::slug($request->input('nombre'), '-');
        $egresado->slug = $this->makeUniqueSlug($slug); // Función auxiliar para asegurarse de que el slug sea único
    
        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('public/fotos');
            $path = str_replace('public/', '', $path);
            $egresado->foto = $path;
        }

        $egresado->user_id = Auth::id();
    
        $egresado->save();

    return redirect()->route('egresados.index');
}

// Función auxiliar para generar un slug único
private function makeUniqueSlug($slug)
{
    $originalSlug = $slug;
    $count = 1;

    // Verificar si el slug existe en la base de datos y agregar un contador hasta que sea único
    while (Egresado::where('slug', $slug)->exists()) {
        $slug = $originalSlug . '-' . $count;
        $count++;
    }

    return $slug;
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Egresado $egresado)
    {
        return view('egresados.edit', compact('egresado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function update(Request $request, $id)
    {
        $egresado = Egresado::findOrFail($id);
        $egresado->nombre = $request->input('nombre');
         $egresado->slug = $request->input('slug');
         $egresado->experiencia = $request->input('experiencia');
         $egresado->profesion = $request->input('profesion');
         $egresado->universidad = $request->input('universidad');
         $egresado->red1 = $request->input('red1');
         $egresado->red2 = $request->input('red2');

         // Generar un slug único a partir del nombre
        $slug = Str::slug($request->input('nombre'), '-');
        $egresado->slug = $this->makeUniqueSlug($slug); // Función auxiliar para asegurarse de que el slug sea único

        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('public/fotos');
            $path = str_replace('public/', '', $path); // Remover 'public/' de la ruta
            $egresado->foto = $path;
        }


        // Concatena la URL completa al número de WhatsApp ingresado
    $whatsappNumber = $request->input('whatsapp');
    if ($whatsappNumber) {
        $egresado->whatsapp = 'https://api.whatsapp.com/send?phone=' . $whatsappNumber;
    } else {
        $egresado->whatsapp = null; // Si no se ingresó número, guarda el campo como nulo
    }

        $egresado->save();
        return redirect()->route('egresados.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Egresado $egresado)
    {
        $egresado->delete();

        if(Storage::delete('public/'.$egresado->foto)){
            Egresado::destroy($egresado->id);
        }

        return back();
    }
}


