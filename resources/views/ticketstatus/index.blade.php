@extends('app')

@section('content')

<div class="mdl-card__supporting-text">
    <a href="{{ URL::route('ticketstatus.create') }}" id="new" class=" mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored mdl-color-text--white">Novo Ticket Status</a>
</div>

<div class="mdl-card__supporting-text">
    @if ($ticketStatusAll->count())
        @foreach ($ticketStatusAll as $ticketStatus)
            <div class="demo-card-square mdl-card_media mdl-shadow--2dp">
                <div class="mdl-card__title mdl-card--expand">

                    <a href="{{ URL::route('ticketstatus.edit', $ticketStatus->id )}}"
                       class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                        {{ $ticketStatus->name }}
                    </a>

                </div>
                <div class="mdl-card__supporting-text">

                    <li class="mdl-list__item mdl-list__item--three-line">
                        <span class="mdl-list__item-primary-content">
                            <span class="mdl-list__item-text-body">
                                {{ $ticketStatus->description }}
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