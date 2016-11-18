<?php

use App\TicketComments;
use Illuminate\Database\Seeder;

class TKCommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TicketComments::create(array(
            'ticket_id' => 1,
            'description' => 'Descrição de alguma coisa',
            'user_id' => 0
        ));

        TicketComments::create(array(
            'ticket_id' => 1,
            'description' => 'Descrição de alguma de outra coisa',
            'user_id' => 0
        ));

        TicketComments::create(array(
            'ticket_id' => 2,
            'description' => 'Descrição de mais alguma coisa',
            'user_id' => 0
        ));

        TicketComments::create(array(
            'ticket_id' => 3,
            'description' => 'Descrição de alguma coisa coisada.',
            'user_id' => 0
        ));

    }
}
