@extends('app')

@section('content')

    @include('errors.list')

    {!! Form::open(['url' => 'tickets','enctype' => 'multipart/form-data']) !!}

    @include('tickets.form',['submitButtonText' => 'Criar Ticket' ,  'formTitle' => 'Novo Ticket'])

    {!! Form::close() !!}

@stop