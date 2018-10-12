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
    protected $category;

    public function __construct()
    {
        $this->category = Category::all();
    }

    public function index()
    {
        $category = $this->category;
        $datas = Post::where('status','A')->paginate($this->totalpages);
        return view ("site.index", compact('datas','category'));
    }

    // public function categoria()
    // {
    //     $category = $this->category;
    //     return view ('site.pages.categoria', compact('category'));
    // }

    public function post($id)
    {
        $category = $this->category;
        $datas = Post::where('id',$id)->with('user','category')->get();
        return view ('site.pages.post', compact('category','datas'));
    }    

    public function categoria($id)
    {
        $category = $this->category;
        $category_selected = Category::where('id', $id)->get();
        $title = $category_selected[0]->name;
        $datas = Post::where('category_id',$id)->where('status','A')->with('category')->paginate($this->totalpages);

        return view ('site.pages.categoria', compact('category','datas','title'));
    }

    // public function showPost($id)
    // {
    //     $category = $this->category;
    //     $data = Post::where('id',$id)->with('user','category')->get();
    //     return view("site.pages.showPost", compact('data','category'));
    // }

    public function empresa()
    {
        $category = $this->category;
        return view ('site.pages.empresa', compact('category'));
    }

    public function contato()
    {
        $category = $this->category;
        return view ('site.pages.contato', compact('category'));
    }
}
