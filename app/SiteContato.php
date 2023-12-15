<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteContato extends Model
{
    //.save() --> salva o objeto no banco de dados;
    // use \App\SiteContato;
    // ::whereIn('campo_a_ser_comparado_por_igual', 'conjunto_de_param');
    // ::whereNotIn() é a mesma ideia do whereIn, mas as comparações excluem os parâmetros passados

    //::whereBetween('campo_comparado_igual', 'conjunto_de_param_entre') esse conjunto é inclusivo

    //whereNotBetween(), apenas o contrário do filtro anterior

    protected $fillable = ['nome', 'telefone', 'email', 'motivo_contato', 'mensagem'];
}
