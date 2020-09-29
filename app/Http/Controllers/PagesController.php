<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function show($id){

//        $posts = DB::table('posts')->get();

        return view('pages.show' , [
            'name'=> 'Samanta',
            'id'=>$id,
            'text' => '<h3> h3 text<h3>',
            'array' => [],
//            'post'=>$posts
        ]);
    }
}
