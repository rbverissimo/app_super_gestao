<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// fornecedors --> nomeação automática do laravel
class Fornecedor extends Model
{
    protected $table = 'fornecedores'; // indicação do nome da tabela

    protected $fillable = ['nome', 'site', 'email', 'uf'];

    //.all(); recupera toda a Collection do banco
    //.find($id...); recupera objeto de acordo com o(s) id(s) passado;

    //where('coluna', 'operador', valor)->get(); 
}
