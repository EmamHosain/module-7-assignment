<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function hello(){
        $text = "hello laravel";
        return view('test',['text'=>$text]);
    }
}
