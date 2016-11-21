@extends('app')

@section('content')

    <div class="mdl-card_media mdl-shadow--2dp">

        {!! Form::model($ticket, ['method' => 'PATCH', 'enctype' => 'multipart/form-data',
        'action' => ['TicketsController@update', $ticket->id]]) !!}

        @include('tickets.form',['submitButtonText' => 'Atualizar Ticket', 'formTitle' => $ticket->title])

        {!! Form::close() !!}




        <div class="mdl-color-text--primary-contrast mdl-card__supporting-text comments">

            @if ($ticketcomments->count())

                @foreach ($ticketcomments as $comment)
                    <div class="comment ">
                        <header class="comment__header">
                            <img src="../images/co2.jpg" class="comment__avatar">
                            <div class="comment__author">
                                <strong>James Splayd2</strong>
                                <span>{{ $comment->create_at }}</span>
                            </div>
                        </header>
                        <div class="comment__text">
                            {{ $comment->description }}
                        </div>

                    </div>
                    <br>

                @endforeach
            @else

                <span >Sem comentários para exibir!</span>
                <i class="material-icons" >sentiment_dissatisfied</i>
            @endif
                {!! Form::open(['url' => 'ticketcomments','enctype' => 'multipart/form-data']) !!}
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <textarea rows=3 class="mdl-textfield__input" name="description" id="comment"></textarea>
                    <label for="comment" class="mdl-textfield__label">Enviar Comentário</label>
                </div>
                <input type="hidden" name="ticket_id" value="{{$ticket->id}}">
                <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                    <i class="material-icons" role="presentation">check</i><span class="visuallyhidden">add comment</span>
                </button>
                {!! Form::close() !!}
        </div>
    </div>
    <br>
@stop