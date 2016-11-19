<div class="demo-card-square mdl-card mdl-shadow--2dp mdl-cell--12-col">
    <div class="mdl-card__supporting-text mdl-cell--12-col">
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell--12-col">
            {!! Form::text('name', null, ['class' => 'mdl-textfield__input']) !!}
            {!! Form::label('nome', 'Título do Ticket Status',['class' => 'mdl-textfield__label']) !!}

        </div>
        <br>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell--12-col">
            {!! Form::textarea('description', null, ['class' => 'mdl-textfield__input']) !!}
            {!! Form::label('descricao', 'Descrição do Ticket Status',['class' => 'mdl-textfield__label']) !!}
        </div>
        <br>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell--12-col">
            {!! Form::submit($submitButtonText, ['class' => 'mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored mdl-color-text--white']) !!}
        </div>
    </div>
</div>

