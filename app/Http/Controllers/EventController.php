<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    //code here

    public function index() {
        return view('/');
    }

    public function passeio() {
        return view('passeios');
    }

    public function carrinho() {
        return view('carrinho_de_compras');
    }
}
