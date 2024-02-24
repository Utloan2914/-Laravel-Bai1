<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    //Action index()
    public function index(){
        //return 'Home';
        $title ="Hoc lap trinh web tai Unicode";
        $content = 'Hoc lap trinh Laravel 8.x tai Unicode';
       
        /* 
        [
            'title' => $title,
            'content' => $content
        ]

        compact('title', 'content')
        */
        return view('home')->with(['title'=>$title, 'content'=>$content]); //load view home.php

        //return View::make('home')->with(['title'=>$title, 'content'=>$content]);

        // $contentView = view('home')->render();
        // //$contentView = $contentView->render();
        // dd($contentView);
        // //return $contentView;
    }

    //Action getNews()
    public function getNews(){
        return 'Danh sách tin tức';
    }

    public function getCategories($id){
        return 'Chuyên mục'.$id;
    }

    public function getProductDetail($id){
        return view('clients.products.detail', compact('id'));
    }
}
