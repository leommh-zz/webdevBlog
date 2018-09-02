<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function amigos(){
       $amigos = [
            ['nome' => 'José Silva', 'Idade' => 25],
            ['nome' => 'Rosalina de Jezus', 'Idade' => 26],
            ['nome' => 'Silva', 'Idade' => 27],
       ];
       return $amigos;
    }

    public function sobre(){
        $eu = [
            'nome' => 'Chavo',
            'idade' => 23
        ];
        return view('sobre', compact('eu'));
    }
}
