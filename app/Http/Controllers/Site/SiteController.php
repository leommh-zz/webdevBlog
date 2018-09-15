<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    //Home
    public function index(){
        return view ('site.index');
    }

    //Categoria
    public function categoria(){
        return view ('site.pages.categoria');
    }

    //Post
    public function post(){
        return view ('site.pages.post');
    }

    //Empresa
    public function empresa(){
        return view ('site.pages.empresa');
    }

    //Contato
    public function contato(){
        return view ('site.pages.contato');
    }

    
}
