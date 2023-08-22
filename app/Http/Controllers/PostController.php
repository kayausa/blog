<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
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
         return $post->get();
     }
}
