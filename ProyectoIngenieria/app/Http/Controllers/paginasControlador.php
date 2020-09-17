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

}
