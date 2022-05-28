<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\azmyRequest;

class waelControll extends Controller
{
    function w(){
        return view('w');
    }
    function w2(Request $request){
        echo $request->title;
    }
}
