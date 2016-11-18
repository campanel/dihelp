@extends('app')

@section('content')


    <div class="mdl-card__supporting-text">
        {{ link_to_route('ticketstatus.edit', 'Atualizar Ticket Status', array($ticketstatus->id), array('class' => 'btn btn-warning')) }}
    </div>

    <div class="demo-card-square mdl-card_media mdl-shadow--2dp">
        <div class="mdl-card__title mdl-card--expand">
            <table class="mdl-data-table mdl-js-data-table  mdl-shadow--2dp table table-striped">
                <thead>
                <tr>
                    <th>Ticket Status Number</th>
                    <th>Status</th>
                    <th>Descrição</th>
                </tr>
                </thead>
                <tr>
                    <td>{{ $ticketstatus->id }}</td>
                    <td>{{ $ticketstatus->name }}</td>
                    <td>{{ $ticketstatus->description }}</td>
                </tr>
            </table>
        </div>
    </div>
    <br>
@stop