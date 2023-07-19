<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato() {
        echo 'Contato via cartas apenas. Caixa postal: 666-6969';
    }
}
