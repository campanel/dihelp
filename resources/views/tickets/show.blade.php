@extends('app')

@section('content')


    <div class="mdl-card__supporting-text">
        {{ link_to_route('tickets.edit', 'Atualizar Ticket', array($ticket->id), array('class' => 'btn btn-warning')) }}
    </div>

    <div class="demo-card-square mdl-card_media mdl-shadow--2dp">
        <div class="mdl-card__title mdl-card--expand">
            <table class="mdl-data-table mdl-js-data-table  mdl-shadow--2dp table table-striped">
                <thead>
                <tr>
                    <th>Ticket Number</th>
                    <th>Assunto</th>
                    <th>Status do Ticket</th>
                </tr>
                </thead>
                <tr>
                    <td>{{ $ticket->id }}</td>
                    <td>{{ $ticket->title }}</td>
                    <td>Em desenvolvimento</td>
                </tr>
                <tr>
                    <td colspan="3">{{ $ticket->description }}</td>
                </tr>
            </table>
        </div>
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