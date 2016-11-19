<div class="demo-card-square mdl-card mdl-shadow--2dp mdl-cell--12-col">
    <div class="mdl-card__supporting-text mdl-cell--12-col">

        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell--12-col">
            {!! Form::text('title', null, ['class' => 'mdl-textfield__input']) !!}
            {!! Form::label('title', 'Título do Ticket',['class' => 'mdl-textfield__label']) !!}

        </div>
        <br>
        <div class="mdl-selectfield mdl-js-selectfield">
            <select id="myselect" name="myselect" class="mdl-selectfield__select">
                <option value=""></option>
                <option value="option0_value">option 0</option>
                <option value="option1_value">option 1</option>
            </select>
            <label class="mdl-selectfield__label" for="myselect">Choose option</label>
        </div>
        <br>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell--12-col">
            {!! Form::textarea('description', null, ['class' => 'mdl-textfield__input']) !!}
            {!! Form::label('descricao', 'Descrição do Ticket',['class' => 'mdl-textfield__label']) !!}
        </div>
        <br>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell--12-col">
            <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-1">
                <input type="checkbox" name="sendmail" id="switch-1" class="mdl-switch__input" checked>
                <span class="mdl-switch__label">Enviar email</span>
            </label>
        </div>
        <br>
        <br>

        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell--12-col">
            {!! Form::submit($submitButtonText, ['class' => 'mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored mdl-color-text--white']) !!}
        </div>
    </div>
</div>

