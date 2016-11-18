<?php

use App\TicketStatus;
use Illuminate\Database\Seeder;

class TKStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TicketStatus::create(array(
            'name' => 'Criado',
            'description' => 'Ticket Criado sem nenhuma ação do Responsável'
        ));

        TicketStatus::create(array(
            'name' => 'Aberto',
            'description' => 'Respondido pelo cliente, esperando ação do responsável'
        ));

        TicketStatus::create(array(
            'name' => 'Atendimento',
            'description' => 'Sendo atendido pelo responsável'
        ));

        TicketStatus::create(array(
            'name' => 'Fechado',
            'description' => 'Tickect encerrado'
        ));

        TicketStatus::create(array(
            'name' => 'Pendente Cliente',
            'description' => 'Aguardando resposta do Cliente'
        ));
    }
}
