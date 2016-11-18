<?php

use App\Ticket;
use Illuminate\Database\Seeder;

class TicketsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ticket::create(array(
            'title' => 'TE - Não executa interface',
            'description' => 'Description de TE - Não executa interface'
        ));

        Ticket::create(array(
            'title' => 'AP - Contratos',
            'description' => 'Description de AP - Contratos'
        ));

        Ticket::create(array(
            'title' => 'CTM - Erro ao editar CTM',
            'description' => 'Description de CTM - Erro ao editar CTM'
        ));

    }
}
