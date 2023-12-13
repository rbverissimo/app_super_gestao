<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// fornecedors --> nomeação automática do laravel
class Fornecedor extends Model
{
    protected $table = 'fornecedores'; // indicação do nome da tabela

    protected $fillable = ['nome', 'site', 'email', 'uf'];
}
