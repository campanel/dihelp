@extends('app')

@section('content')
    <div class="mdl-card__supporting-text mdl-cell--12-col">
        <ul class="mdl-list">
        @if ($tickets->count())
            @foreach ($tickets as $ticket)
                <li class="mdl-list__item mdl-list__item--three-line border-bottom">
                <span class="mdl-list__item-primary-content">
                  <i class="material-icons mdl-list__item-avatar ">bug_report</i>
                  <a href="{{ URL::route('tickets.show', array($ticket->id) )}}">
                      <span>#{{ $ticket->id }} - {{ $ticket->title }}</span>
                  </a>
                  <span class="mdl-list__item-text-body">
                    {{ substr($ticket->description, 0, 250) }}
                  </span>
                </span>
                <span class="mdl-list__item-secondary-content">
                    <i class="material-icons mdl-color-text--grey-600">speaker_notes</i>
                </span>
                </li>
            @endforeach
        @else
            Sem dados para exibir.
        @endif
        </ul>
    </div>
@stop