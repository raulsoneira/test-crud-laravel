<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Moto;

class MotoController extends Controller
{
    public function index()
    {

        $motos = Moto::all();

        return view(
            'moto.index',
            [
                'motos' => $motos,
            ]
        );
    }

    public function store(Request $request)
    {
        $request->validate([
            'marca' => ['required', 'unique:motos'],
            'model' => ['required'],
            'anio' => ['required'],
            'precio' => ['required', 'numeric'],
        ]);

        $moto = new moto();
        $moto->marca = $request->marca;
        $moto->model = $request->model;
        $moto->anio = $request->anio;
        $moto->precio = $request->precio;
        $moto->save();

        return redirect('/moto')->with('success', 'Moto ' . $moto->marca . ' afegida correctament');
    }

    public function destroy($id)
    {
        $moto = Moto::find($id);
        $moto->delete();

        return redirect('/moto')->with('success', 'Moto ' . $moto->marca . ' eliminada correctamente');
    }
}
