<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class LikeController extends Controller
{
    //
    public function store(Request $request, Post $post){
        //dd('Dando Like');
        //dd($post->id);
        //dd($request->user()->id);

        $post->likes()->create([
            'user_id' => $request -> user()->id
        ]);
        return back();
    }

    public function destroy(Request $request, Post $post){
        //dd('eliminando like');
        $request->user()->likes()->where('post_id', $post->id)->delete();

        return back();
    }
}
