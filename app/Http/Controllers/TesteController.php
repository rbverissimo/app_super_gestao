<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    function teste($param1, $param2){
        return 'Teste funcionando!!! 
        Parâmetro 1: '.$param1.' Parâmetro 2: '.$param2;
    }
}
