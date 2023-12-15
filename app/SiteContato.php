<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteContato extends Model
{
    //.save() --> salva o objeto no banco de dados;
    // use \App\SiteContato;
    // ::whereIn('campo_a_ser_comparado_por_igual', 'conjunto_de_param');
    // ::whereNotIn() é a mesma ideia do whereIn, mas as comparações excluem os parâmetros passados

    protected $fillable = ['nome', 'telefone', 'email', 'motivo_contato', 'mensagem'];
}
