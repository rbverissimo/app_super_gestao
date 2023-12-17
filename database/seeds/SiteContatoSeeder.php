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
        $count = 0;
        while($count < 100) {

            SiteContato::create([
                'nome' => 'Contato '.$count,
                'telefone' => $count < 10 ? '(62) 99856-100'.$count : '(62) 99856-10'.$count,
                'email'=> 'contato@contato'.$count.'.com.br',
                'motivo_contato'=> $count % 2 == 0 ? '1' : '2',
                'mensagem'=>'Olá, eu sou o Contato '.$count
            ]);

            $count++;

        }
    }

    private function updateDados() {

    }
}
