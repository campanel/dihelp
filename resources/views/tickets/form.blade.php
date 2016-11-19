<div class="mdl-card mdl-shadow--6dp mdl-cell--12-col">
    <div class="mdl-card__title mdl-color--primary mdl-color-text--white">
        <h2 class="mdl-card__title-text">{{$formTitle}}</h2>
    </div>
    <div class="mdl-card__supporting-text getmdl-select__fullwidth">
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label ">
            {!! Form::label('client', 'Solicitante',['class' => '']) !!}
            {!! Form::select('client_id', array('1' => 'Cliente 1', '2' => 'Cliente 2')) !!}
        </div>
        ou
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            {!! Form::text('client_email', null, ['class' => 'mdl-textfield__input']) !!}
            {!! Form::label('client_email', 'e-mail do solicitante',['class' => 'mdl-textfield__label']) !!}
        </div>
        <br>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label ">
            {!! Form::label('responsible_area', 'Setor Responsável',['class' => '']) !!}
            {!! Form::select('responsible_area_id', array('1' => 'Manutenção', '2' => 'Melhoria')) !!}
        </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label ">
            {!! Form::label('responsible_person', 'Responsável',['class' => '']) !!}
            {!! Form::select('responsible_person_id', array('1' => 'Cléber', '2' => 'Elson', '3' => 'Henrique')) !!}
        </div>
        <br>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label ">
            {!! Form::label('module', 'Módulo',['class' => '']) !!}
            {!! Form::select('module_id', array('1' => 'AP', '2' => 'EC2')) !!}
        </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label ">
            {!! Form::label('request', 'Solicitação',['class' => '']) !!}
            {!! Form::select('request_id', array('1' => 'Correção', '2' => 'Nova Feature')) !!}
        </div>
        <br>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label ">
        {!! Form::label('priority', 'Prioridade',['class' => '']) !!}
            {!! Form::select('priority_id', array('1' => 'Normal', '2' => 'Urgente')) !!}
        </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label ">
            {!! Form::label('size', 'Tamanho',['class' => '']) !!}
            {!! Form::select('size_id', array('1' => 'Pequeno', '2' => 'Médio', '3' => 'Grande')) !!}
        </div>
        <br>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell--12-col">
            {!! Form::text('title', null, ['class' => 'mdl-textfield__input']) !!}
            {!! Form::label('title', 'Título do Ticket',['class' => 'mdl-textfield__label']) !!}
        </div>
        <br>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell--12-col">
            {!! Form::textarea('description', null, ['class' => 'mdl-textfield__input']) !!}
            {!! Form::label('descricao', 'Descrição do Ticket',['class' => 'mdl-textfield__label']) !!}
        </div>
        <br>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select__fullwidth">
            <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-1">
                <input type="checkbox" name="sendmail" id="switch-1" class="mdl-switch__input" checked>
                <span class="mdl-switch__label">Enviar email</span>
            </label>
        </div>

    </div>
    <div class="mdl-card__actions mdl-card--border">
        <button class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">{{$submitButtonText}}</button>
    </div>
</div>
