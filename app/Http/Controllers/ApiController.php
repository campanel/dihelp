<?php

namespace App\Http\Controllers;

use App\Ticket;
use App\TicketComments;
use Illuminate\Http\Request;
use PhpParser\Comment;

class ApiController extends Controller
{
    /**
     * Checa se abre ou atualiza
     *
     * @return Response
     */
    public function check(Request $request)
    {
        $parameters = [
            'title' => '',
            'description' => '',
            'client_id' => 0,
            'contact_name' => 0,
            'responsible_area_id' => 0,
            'responsible_person_id' => 0,
            'module_id' => 0,
            'request_id' => 0,
            'priority_id' => 0,
            'size_id' => 0,
            'emails_to' => '',
            'emails_to_cc' => '',
        ];

        //$parameters = $request->toArray();
        $parameters['title'] = $request->title;
        $parameters['contact_name'] = $request->contact_name;
        $parameters['description'] = $request->description;
        $parameters['emails_to'] = $request->emails_to;

        preg_match("/\[Ticket\#(?P<ticket_id>\w+)\]/i", $parameters['title'], $match);


        $ticket = new Ticket();
        $sendmail = new MailController;


        if(isset($match['ticket_id'])){
            $parameters['ticket_id'] =
            $ticket = Ticket::find($match['ticket_id']);
            if($ticket){
                $parameters['ticket_id'] = $ticket->id;
                $parameters['user_id'] = rand(0,1);
                TicketComments::create($parameters);
            }
        }else{
            $newTicket = $ticket->create($parameters);
            $d = $sendmail->send_email_ticket($newTicket, 'create');
            dd($d);
        }

    }
}
