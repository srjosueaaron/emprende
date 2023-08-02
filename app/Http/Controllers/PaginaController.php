<?php

namespace App\Http\Controllers;

//Obliatorio importar nuestra tabla a usar
use App\Models\Egresado;
use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function home(){
        $egresados = Egresado::inRandomOrder()->take(5)->get();
        return view('index', ['publicaciones' => $egresados]);
    }

    public function blog() {
        $egresados = Egresado::inRandomOrder()->take(5)->get();
        //$egresados = Egresado::where('universidad', 'UTTEC')->inRandomOrder()->take(2)->get();
        return view('blog', ['publicaciones' => $egresados]);
    }
    
    
    public function publi(Egresado $egresado){
        //Va a tomar primero el slug escrito por el usuario. En el caso
        //la estamos construyendo en la pagina de BLOG 
        //$publi = $slug;

        //Aqui hacemos referencia a la vista que va a recibir la informacion
        return view('vispost', ['individual' => $egresado]);
    }
}