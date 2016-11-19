@extends('app')

@section('content')

    @include('errors.list')


    {!! Form::model($ticket, ['method' => 'PATCH', 'enctype' => 'multipart/form-data',
        'action' => ['TicketsController@update', $ticket->id]]) !!}

        @include('tickets.form',['submitButtonText' => 'Atualizar Ticket'])

    {!! Form::close() !!}

@stop