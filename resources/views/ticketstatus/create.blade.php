@extends('app')

@section('content')

    @include('errors.list')



    {!! Form::open(['url' => 'ticketstatus','enctype' => 'multipart/form-data']) !!}

    @include('ticketstatus.form',['submitButtonText' => 'Criar Ticket Status' ])

    {!! Form::close() !!}


@stop