<?php

use App\SiteContato;
use Illuminate\Database\Seeder;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SiteContato::create([
            'nome' => 'Contato Novo',
            'telefone' => '(62) 99856-1019',
            'email'=> 'contato@contatonovo.com.br',
            'motivo_contato'=> '2',
            'mensagem'=>'Olá, gostaria de mais informações sobre o Super Gestão!'
        ]);

        $s = new SiteContato();
        $s->nome='Contato 002';
        $s->telefone='(44) 98934-2300';
        $s->email='contatonovo@contato.net';
        $s->motivo_contato='3';
        $s->mensagem='Olha, esse site tá uma bosta';
        $s->save();
    }
}
