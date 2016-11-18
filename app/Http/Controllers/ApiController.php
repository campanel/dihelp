<?php

namespace App\Http\Controllers;

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
        $parametros['subject'];
        $ticket_id = strstr($parametros['subject'], '#', true);

        if($ticket_id){
            $ticket = Ticket::find($ticket_id);
            if($ticket){
                return $ticket->update($ticket, $request);
            }
        }

        return $ticket->create($request);

    }
}
