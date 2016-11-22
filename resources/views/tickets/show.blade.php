@extends('app')

@section('content')

    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header
            mdl-layout--fixed-tabs">
        <header class="mdl-layout__header mdl-layout--no-drawer-button">
            <div class="mdl-layout__header-row center">
                <!-- Title -->
                <span class="mdl-layout-title">
                    [Ticket #{{$ticket->id}}] - {{$ticket->title}}
                </span>
            </div>
            <!-- Tabs -->
            <div class="mdl-layout__tab-bar mdl-js-ripple-effect">
                <a href="#fixed-tab-1" class="mdl-layout__tab is-active">Detalhes</a>
                <a href="#fixed-tab-2" class="mdl-layout__tab">Comentários</a>
                <a href="#fixed-tab-3" class="mdl-layout__tab">Desempenho</a>
            </div>
        </header>
        <div class="mdl-layout__drawer">
            <span class="mdl-layout-title">Title</span>
        </div>
        <main class="mdl-layout__content">
            <section class="mdl-layout__tab-panel is-active" id="fixed-tab-1">
                <div class="page-content">
                    {!! Form::model($ticket, ['method' => 'PATCH', 'enctype' => 'multipart/form-data',
                        'action' => ['TicketsController@update', $ticket->id]]) !!}

                    @include('tickets.form',['submitButtonText' => 'Atualizar Ticket', 'formTitle' => $ticket->title])

                    {!! Form::close() !!}
                </div>
            </section>
            <section class="mdl-layout__tab-panel" id="fixed-tab-2">
                <div class="page-content">
                    <div class="comments mdl-card mdl-cell--12-col">
                        {!! Form::open(['url' => 'ticketcomments','enctype' => 'multipart/form-data']) !!}
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <textarea rows=1 class="mdl-textfield__input" name="description" id="comment"></textarea>
                            <label for="comment" class="mdl-textfield__label">Enviar Comentário</label>
                        </div>
                        <input type="hidden" name="ticket_id" value="{{$ticket->id}}">
                        <input type="hidden" name="contact_name" value="{{$ticket->contact_name}}">
                        <input type="hidden" name="emails_to" value="{{$ticket->emails_to}}">
                        <input type="hidden" name="emails_to_cc" value="{{$ticket->emails_to_cc}}">
                        <input type="hidden" name="title" value="{{$ticket->title}}">
                        <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                            <i class="material-icons" role="presentation">check</i><span class="visuallyhidden">add comment</span>
                        </button>
                        {!! Form::close() !!}
                        @if ($ticketcomments->count())

                            @foreach ($ticketcomments as $comment)
                                <div class="comment ">
                                    <header class="comment__header">
                                        <i class="material-icons mdl-list__item-avatar comment__avatar">person</i>
                                        <div class="comment__author">
                                            <strong> {{$persons[rand(1,2)]}}</strong>
                                            <span>{{ $comment->created_at}}</span>
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

                    </div>

                </div>
            </section>
            <section class="mdl-layout__tab-panel" id="fixed-tab-3">
                <div class="page-content">
                    <div class="comments mdl-card mdl-cell--12-col">
                    Estatistícas do ticket
                    </div>
                </div>
            </section>
        </main>
    </div>
@stop