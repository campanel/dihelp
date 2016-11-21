@extends('app')

@section('content')

    <div class="demo-card-square mdl-card_media mdl-shadow--2dp">

            {!! Form::model($ticket, ['method' => 'PATCH', 'enctype' => 'multipart/form-data',
        'action' => ['TicketsController@update', $ticket->id]]) !!}

            @include('tickets.form',['submitButtonText' => 'Atualizar Ticket', 'formTitle' => $ticket->title])

            {!! Form::close() !!}

        @if ($comments->count())
            <div class="mdl-card__supporting-text mdl-card--border ">
                <ul class="demo-list-three mdl-list">
                @foreach ($comments as $comment)
                        <li class="mdl-list__item mdl-list__item--three-line ">
                        <span class="mdl-list__item-primary-content">
                          <i class="material-icons mdl-list__item-avatar">person</i>
                          <span>Bryan Cranston</span>
                          <span class="mdl-list__item-text-body">
                            {{ $comment->description }}
                          </span>
                        </span>
                        <span class="mdl-list__item-secondary-content">
                          <span class="mdl-list__item-text-body">
                            {{ $comment->created_at }}
                          </span>
                        </span>
                    </li>

                @endforeach
                </ul>
            </div>
        @else
            Sem dados para exibir.
        @endif
    </div>
    <br>
@stop