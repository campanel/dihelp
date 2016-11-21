@extends('app')

@section('content')


    <div class="mdl-color-text--primary-contrast mdl-card__supporting-text comments">
        {!! Form::open(['url' => 'ticketcomments','enctype' => 'multipart/form-data']) !!}
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <textarea rows=1 class="mdl-textfield__input" name="comment" id="comment"></textarea>
                <label for="comment" class="mdl-textfield__label">Enviar Comentário</label>
            </div>
            <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                <i class="material-icons" role="presentation">check</i><span class="visuallyhidden">add comment</span>
            </button>
        {!! Form::close() !!}



    @if ($ticketcomments->count())

        @foreach ($ticketcomments as $comment)
            <div class="comment ">
                <header class="comment__header">
                    <img src="images/co1.jpg" class="comment__avatar">
                    <div class="comment__author">
                        <strong>James Splayd</strong>
                        <span>2 days ago</span>
                    </div>
                </header>
                <div class="comment__text">
                    {{ $comment->description }}
                </div>

                <div class="comment__answers">
                    <div class="comment">
                        <header class="comment__header">
                            <img src="images/co2.jpg" class="comment__avatar">
                            <div class="comment__author">
                                <strong>John Dufry</strong>
                                <span>2 days ago</span>
                            </div>
                        </header>
                        <div class="comment__text">
                            Yep, agree!
                        </div>

                    </div>
                </div>
            </div>
            <br>

        @endforeach
    @else
        Sem dados para exibir.
    @endif

    </div>


@stop