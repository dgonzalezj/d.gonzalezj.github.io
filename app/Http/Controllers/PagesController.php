<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class PagesController extends Controller
{
    public function inicio (){
        $motas=App\Mota::paginate(2);
        return view('welcome',compact('motas'));
    }

    public function detalle($id){
        $mota = App\Mota::findOrfail($id);
        return view('motas.detalle',compact ('mota'));
    }

    public function crear(Request $request){
       // return $request->all();
        
       $request->validate([
           'nombre'=>'required',
           'descripcion'=>'required'
       ]);

       $motaNueva= new App\Mota;
       $motaNueva->nombre=$request->nombre;
       $motaNueva->descripcion=$request->descripcion;

       $motaNueva->save();
       return back()->with('mensaje','Mota agregada!');
    }

    public function editar($id){
        $mota = App\Mota::findOrfail($id);
        return view('motas.editar',compact('mota'));
    }

    public function update(Request $request, $id){
        
        $request->validate([
            'nombre'=>'required',
            'descripcion'=>'required'
        ]);
        
        $motaUpdate = App\Mota::findOrFail($id);
        $motaUpdate->nombre =$request->nombre;
        $motaUpdate->descripcion =$request->descripcion;

        $motaUpdate->save();
        return back()->with('mensaje','Mota actualizada');
    }

    public function delete($id){
        $motaEliminar=App\Mota::findOrFail($id);
        $motaEliminar->delete();
        return back()->with('mensaje','Mota eliminada');
    }
    public function fotos(){
        return view('fotos');
    }
 
    public function nosotros($nombre=null){
        $equipo=['Diego','Seba','Juanito'];
            //arreglo
        //return view('nosotros',['equipo'=>$equipo,'nombre=>$nombre]);
        return view('nosotros',compact('equipo','nombre'));
    }

    public function noticias(){
        return view('blog');
    }
}
