<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller

{
    public function index(){
        echo '<h2>Query Eloquent Model</h2>';
        // $allPost = Post::all();
        // if ($allPosts->count()>0) {
        //     foreach ($allPosts as $item) {
        //     echo $item->title.'<br/>';
        //     }

        // $detail = Post::find(1);
        // dd($detail);
        //sử dụng quẻy builder
        //$activePosts = DB::table('posts')->where('status',1)->get();
        $activePosts = Post::where('status',1)->orderBy('id','DESC')->get();
        //dd($activePosts);
    //      if ($activePosts->count()>0) {
    //         foreach ($activePosts as $item) {
    //         echo $item->title.'<br/>';
    //         }
    // }
    // $allPosts = Post::all();
    // $activePosts=$allPosts->reject(function($post){
    //     //dd($post);
    //     return $post->status == 0; // boolean
    // });
    // dd($activePosts);
    // Post::chunk(2, function ($posts) {
    //     foreach ($posts as $post) {
    //     echo $post->title. "<br>";
    //     }
    //     echo 'Kết thúc chunk <br>';
    // });

    $allPosts = Post::cursor();
   foreach($allPosts as $item){
        echo $item->title.'<br/>';
   }
}}
