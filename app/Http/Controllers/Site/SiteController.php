<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Post;
use App\Models\Category;

class SiteController extends Controller
{

    protected $model;
    protected $totalpages = 5;

    public function index()
    {
        $datas = Post::where('status','A')->paginate($this->totalpages);
        return view ("site.index", compact('datas'));
    }

    public function post($id)
    {
        $datas = Post::where('id',$id)->with('user','category')->get();
        return view ('site.pages.post', compact('datas'));
    }    

    public function categoria($id)
    {
        $category_selected = Category::where('id', $id)->get();
        $title = $category_selected[0]->name;
        $datas = Post::where('category_id',$id)->where('status','A')->with('category')->paginate($this->totalpages);

        return view ('site.pages.categoria', compact('datas','title'));
    }

    public function empresa()
    {
        return view ('site.pages.empresa');
    }

    public function contato()
    {
        return view ('site.pages.contato');
    }
}
