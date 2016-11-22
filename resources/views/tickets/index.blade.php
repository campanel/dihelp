@extends('app')

@section('content')

    <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp mdl-cell--12-col ">
        <thead>
        <tr>
            <th class="mdl-data-table__cell--non-numeric">TK</th>
            <th class="mdl-data-table__cell--non-numeric">Título</th>
            <th class="mdl-data-table__cell--non-numeric">Tipo</th>
            <th class="mdl-data-table__cell--non-numeric">Cliente</th>
            <th class="mdl-data-table__cell--non-numeric">Status</th>
            <th class="mdl-data-table__cell--non-numeric">Responsável</th>
            <th class="mdl-data-table__cell--non-numeric">Criado</th>
        </tr>
        </thead>
        <tbody>

        @if ($tickets->count())
            @foreach ($tickets as $ticket)

                <tr onclick="window.document.location='{{ URL::route('tickets.show', array($ticket->id) )}}';">
                    <td class="mdl-data-table__cell--non-numeric">
                            #{{ $ticket->id }}
                    </td>
                    <td class="mdl-data-table__cell--non-numeric">
                        {{ $ticket->title }}
                    </td>
                    <td class="mdl-data-table__cell--non-numeric">
                        <i class="material-icons mdl-list__item-icon ">bug_report</i>
                    </td>
                    <td class="mdl-data-table__cell--non-numeric">{{ $ticket->contact_name }}</td>
                    <td class="mdl-data-table__cell--non-numeric">Em desenvolvimento</td>
                    <td class="mdl-data-table__cell--non-numeric">Campanel</td>
                    <td class="mdl-data-table__cell--non-numeric">{{ $ticket->created_at }}</td>
                </tr>

            @endforeach
        @else
            <td colspan="8" class="mdl-data-table__cell--non-numeric">Sem Tickets no momento</td>
        @endif
        </tbody>
    </table>
@stop