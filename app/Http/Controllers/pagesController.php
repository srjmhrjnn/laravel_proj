<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function home()
    {
        $tasks=[
        'task 1',
        'task 2',
        'task 3'
        ];
        return view('welcome',['task'=>$tasks],['foo'=>'<script>alert("foobar")</script>']);
    }
    public function contact()
    {
        return view('contact');
    }
}
