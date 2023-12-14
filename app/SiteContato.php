<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteContato extends Model
{
    //.save() --> salva o objeto no banco de dados;

    protected $fillable = ['nome', 'telefone', 'email', 'motivo_contato', 'mensagem'];
}
