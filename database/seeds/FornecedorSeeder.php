<?php

use Illuminate\Database\Seeder;
use App\Fornecedor;
use Illuminate\Support\Facades\DB;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $f = new Fornecedor();
        $f->nome = 'Fornecedor 100';
        $f->site = 'fornecedor100@fornecedor.com.br';
        $f->uf = 'SP';
        $f->email = 'contato@fornecedor100.com.br';
        $f->save();

        Fornecedor::create([
            'nome'=> 'Fornecedor 200',
            'site'=> 'fornecedor200@fornecedor.com.br',
            'uf' => 'GO',
            'email' => 'contato@fornecedor200.com.br'
        ]);

        // não tratado pelo Eloquent
        DB::table('fornecedores')->insert([

            'nome'=> 'Fornecedor 300',
            'site'=> 'fornecedor300@fornecedor.com.br',
            'uf' => 'TO',
            'email' => 'contato@fornecedor300.com.br'
        ]);
    }

}
