<?php

namespace App\Http\Controllers;

use App\Http\Requests\TicketCommentsRequest;
use App\TicketComments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TicketCommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $ticketcomments = TicketComments::all()->sortByDesc("id");;

        return view('ticketcomments.index', compact('ticketcomments'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('ticketcomments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(TicketCommentsRequest $request)
    {
        //dd($request);
        $parameters = $request->toArray();
        $parameters['user_id'] = rand(0,1);
        TicketComments::create($parameters);
        return Redirect::back();
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show( TicketComments $ticketcomments)
    {
        return view('ticketcomments.show', compact('ticketcomments'));
    }
}
