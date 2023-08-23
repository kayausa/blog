<?php

namespace App\Http\Controllers;


use App\Models\Post;

use Illuminate\Http\Request;




class PostController extends Controller
{
   
   
    //use宣言は外部にあるクラスをPostController内にインポートできる
    
    
    /**
     * Post一覧を表示する
     * 
     * @param Post Postモデル
     * 
     */
     
     public function index(Post $post)
     {

         return view('posts.index')->with(['posts'=> $post->getPaginateByLimit()]);
     }
     public function show(Post $post)
     {
         return view('posts.show')->with(['post'=>$post]);
     }
}

?>

