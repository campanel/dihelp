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
        $parametros = $request->toArray();
        $parametros['title'] = $parametros['subject'];



        $ticket_id = strstr($parametros['subject'], '#', true);

        $ticket = new Ticket();
        //dd($parametros);

        if($ticket_id){
            $ticket = Ticket::find($ticket_id);
            if($ticket){
                return $ticket->update($ticket, $parametros);
            }
        }

        return $ticket->create($parametros);

    }
}
