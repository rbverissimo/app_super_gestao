<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    function teste(string $param1 = null, string $param2 = null){
        return view('site.teste', ['param1'=> $param1, 'param2'=>$param2]);
    }
}
