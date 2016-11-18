<?php

namespace App\Http\Controllers;

use App\Http\Requests\TicketStatusRequest;
use App\TicketStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TicketStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $ticketStatusAll = TicketStatus::all();
        //dd($ticketStatus);
        return view('ticketstatus.index', compact('ticketStatusAll'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('ticketstatus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(TicketStatusRequest $request)
    {
        $ticketstatus = TicketStatus::create($request->toArray());
        if(!$ticketstatus->id){
            flash('Erro ao criar Ticket', 'danger');
            return Redirect::back();
        }

        return redirect('ticketstatus')->with('flash_message');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show( TicketStatus $ticketstatus)
    {
        //dd($ticketstatus);

        return view('ticketstatus.show', compact('ticketstatus'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit(TicketStatus $ticketstatus)
    {
        return view('ticketstatus.edit', compact('ticketstatus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update( TicketStatus $ticketstatus, TicketStatusRequest $request)
    {
        $ticketstatus->update($request->toArray());

        flash('Ticket Status atualizado com Sucesso!');
        return redirect('ticketstatus')->with('flash_message');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(TicketStatus $ticketstatus)
    {
        //$ticketstatus->delete();
        //flash('Ticket deletado com sucesso!');
        flash('Não será deletado!');
        return redirect('ticketStatus')->with('flash_message');
    }

}
