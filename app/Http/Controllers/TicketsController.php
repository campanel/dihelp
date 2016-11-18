<?php

namespace App\Http\Controllers;

use App\Http\Requests\TicketRequest;
use App\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TicketsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $tickets = Ticket::all();
        //dd($tickets);
        return view('tickets.index', compact('tickets'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('tickets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(TicketRequest $request)
    {
        $ticket = Ticket::create($request);
        if(!$ticket->id){
            flash('Erro ao criar Ticket', 'danger');
            return Redirect::back();
        }

        return redirect('tickets')->with('flash_message');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show(Ticket $ticket)
    {
        $comments = Ticket::find($ticket->id)->comment;
        return view('tickets.show', compact('ticket','comments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit(Ticket $ticket)
    {
        return view('tickets.edit', compact('ticket'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update( Ticket $ticket, TicketRequest $request)
    {
        $ticket->update($request->toArray());

        flash('Ticket atualizado com Sucesso!');
        return redirect('tickets')->with('flash_message');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Ticket $ticket)
    {
        //$ticket->delete();
        //flash('Ticket deletado com sucesso!');
        flash('Não será deletado!');
        return redirect('tickets')->with('flash_message');
    }

}
