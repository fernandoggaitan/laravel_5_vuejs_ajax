<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Nota;
class NotasController extends Controller
{
	public function notas(){
		return view('notas');
	}
	public function mostrarNotas(){
		return Nota::all();
	}
	public function guardarNota(Request $request){
		$nota = new Nota();
		$nota->descripcion = $request->input('descripcion');		
		$nota->save();
		return $this->mostrarNotas();
	}
	public function eliminarNota(Request $request){
		$nota = Nota::find($request->input('id'));
		$nota->delete();
		return $this->mostrarNotas();
	}
}
