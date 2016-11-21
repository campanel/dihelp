<?php

namespace App\Http\Controllers;

use App\Ticket;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    /**
     * Checa se abre ou atualiza
     *
     * @return Response
     */
    public function check(Request $request)
    {
        $parametros = [
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

        //$parametros = $request->toArray();
        $parametros['title'] = $request->title;
        $parametros['contact_name'] = $request->contact_name;
        $parametros['description'] = $request->description;
        $parametros['emails_to'] = $request->emails_to;
        //exit;

        $ticket_id = strstr($parametros['title'], '#', true);

        $ticket = new Ticket();
        $sendmail = new MailController;
        //dd($parametros);

        if($ticket_id){
            $ticket = Ticket::find($ticket_id);
            if($ticket){
                return $ticket->update($ticket, $parametros);
            }
        }

        $newTicket = $ticket->create($parametros);
        $d = $sendmail->send_email_ticket($newTicket, 'create');
        dd($d);
        return $newTicket;

    }
}
