<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    
}
