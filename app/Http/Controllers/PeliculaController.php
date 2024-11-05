<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelicula;

class PeliculaController extends Controller
{

    public function mostrar_formulario()
    {
        return view('home');
    }
    
    public function create()
    {
        $pelicula = new Pelicula();

        $pelicula->isan = '1251231';
        $pelicula->titulo = 'Joker';
        $pelicula->ano = 2020;
        $pelicula->director = 'Ang Lee';

        $pelicula->save();

        return $pelicula;
    }

    public function store(Request $request)
    {   
        $pelicula = new Pelicula();
        $pelicula->isan = $request->isan;
        $pelicula->titulo = $request->titulo;
        $pelicula->ano = $request->ano;
        $pelicula->director = $request->director;
        $pelicula->save();

        return $pelicula;
    }

    public function list()
    {
        $peliculas = Pelicula::where('ano', '<', 2000)->orderBy('id', 'asc')->get();
        return view('peliculas.list', compact('peliculas'));
    }

    public function show(Request $request)
    {
        $pelicula = Pelicula::find($request->id);
        return view('peliculas.show', compact('pelicula'));

    }

    public function update()
    {
        //para buscar por id
        $pelicula = Pelicula::find(1);

        $pelicula->isan = '124';
        $pelicula->titulo = 'Título actualizado';
        $pelicula->ano = 2015;

        $pelicula->save();

        // $pelicula = Pelicula::where('ano', '>', 2000)->update(['titulo' => 'Título actualizado 2', 'ano' => 2024]);
        // $pelicula = Pelicula::where('ano', '>', 2000)->orderBy('ano', 'desc')->get();

        return $pelicula;
    }

    public function delete()
    {
        $pelicula = Pelicula::find(1);

        $pelicula->delete();

        return "Eliminado correctamente";
    }
}
