<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
        return view('pages.index'); // เรียก views โดยเริ่มจาก pages ใส่ชื่อโดยไม่ต้องเอานามสกุลไฟล์มา
    }

    public function show($id){
        $titles = ['A','B','C','D'];
        return view('pages.show', [
            'id'=> $id,
            'title' => $titles[$id]
        ]);
    }

    public function drop($name,$tag){
        return view('pages.drop' , [
            'name'=> $name,
            'tag' => $tag
        ]);
    }
}
