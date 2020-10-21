<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;


class PaginasControlador extends Controller{

    public function inicio(){
        return view("welcome");
    }

    public function formulario(){
        return view("formulario");
    }
    public function login(){
        return view("login");
    }

    public function verifica(Request $request){
        $usuario = Usuario::where([['usuario', $request->input('usuario')] , ['contrasenna',$request->input('password')]])->get();
        echo $usuario;
        if($usuario != '[]'){
            // $Usu = json_decode($usuario, true);
            // if($Usu[0]["usuario"] == $request->input('usuario') && $Usu[0]["contrasenna"] == $request->input('password')){
            return view("formulario");    
        }else{
            return view("login");
        }

    }


    public function contactar(){
        return view("contacto");
    }
    public function galeria(){
        return view("galeria");
    }

    public function store(Request $request)
    {
        $usuarioInser = new Usuario;
        $usuarioInser->usuario = "1927";
        $usuarioInser->contrasenna = "lilo";
        $usuarioInser->rol = 1;

        $usuarioInser->save();
        return view("welcome");
    }

    public function actualiza(Request $request)
    {
        $usuarioInser = Usuario::find('1927');
        $usuarioInser->contrasenna = "PASS";
        $usuarioInser->rol = 0;

        $usuarioInser->save();
        return view("welcome");
    }

}
