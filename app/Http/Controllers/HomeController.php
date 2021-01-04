<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelicula;
use DB;

class HomeController extends Controller
{

    public function index(){

    	$peliculas = DB::table('peliculas')->get();;
        $numCoincidencias = count($peliculas);
    	return view ('/public/home', ['peliculas'=>$peliculas, 'numCoincidencias'=>$numCoincidencias]);
    }

    public function buscarGenero(Request $request)
    {
        
        $categoria = DB::table('categorias')->where('nombre', $request->all())->first();
       
        $peliculas = DB::table('peliculas')->where('categoria_id', $categoria->id)->get();
        $numCoincidencias = count($peliculas);
        
        return view ('/public/home', ['peliculas'=>$peliculas, 'numCoincidencias' => $numCoincidencias]);
    }

    public function buscar(Request $request)
    {
     
    	$peliculas = DB::table('peliculas')->where('Director', 'like', '%'.$request->autor.'%')->orWhere('titulo',  'like', '%'.$request->autor.'%')->get();
        $numCoincidencias = count($peliculas);
        
        return view ('/public/home', ['peliculas'=>$peliculas, 'numCoincidencias' => $numCoincidencias]);
    }

    public function fichaPelicula(Request $request)
    {
 
        $pelicula = Pelicula::find($request->id);
        $id = $pelicula->categoria->id;
        $peliculasRelacionadas = DB::table('peliculas')->where('categoria_id', $id)->take(5)->get();
        
        return view ('/public/ficha', ['pelicula'=>$pelicula, 'peliculasRelacionadas'=>$peliculasRelacionadas]);
    }
}
