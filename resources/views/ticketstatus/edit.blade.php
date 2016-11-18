@extends('app')

@section('content')

    @include('errors.list')


    {!! Form::model($ticketstatus, ['method' => 'PATCH', 'enctype' => 'multipart/form-data',
        'action' => ['TicketStatusController@update', $ticketstatus->id]]) !!}

        @include('ticketstatus.form',['submitButtonText' => 'Atualizar Ticket Status'])

    {!! Form::close() !!}

@stop