@extends('app')

@section('content')

<div class="mdl-card__supporting-text">
    <a href="{{ URL::route('tickets.create') }}" class=" mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored mdl-color-text--white">Novo Ticket</a>
</div>

<div class="mdl-card__supporting-text">
    @if ($tickets->count())
        @foreach ($tickets as $ticket)
            <div class="demo-card-square mdl-card_media mdl-shadow--2dp">
                <div class="mdl-card__title mdl-card--expand">
                    <a href="{{ URL::route('tickets.show', array($ticket->id) )}}"
                       class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                        #{{ $ticket->id }} - {{ $ticket->title }}
                    </a>

                </div>
                <div class="mdl-card__supporting-text">

                    <li class="mdl-list__item mdl-list__item--three-line">
                        <span class="mdl-list__item-primary-content">
                            <span class="mdl-list__item-text-body">Atendente Fulano</span>

                        </span>
                        <span class="mdl-list__item-secondary-content">
                            <span class="mdl-list__item-text-body">
                              Nome do Cliente
                            </span>
                        </span>
                    </li>
                </div>
            </div>
            <br>
        @endforeach
    @else
        Sem dados para exibir.
    @endif
</div>
@stop