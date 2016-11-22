
    <div class="mdl-card__supporting-text  ">
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            {!! Form::text('contact_name', null, ['class' => 'mdl-textfield__input']) !!}
            {!! Form::label('contact_name', 'Nome do contato principal',['class' => 'mdl-textfield__label']) !!}
        </div>
        
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            {!! Form::text('emails_to', null, ['class' => 'mdl-textfield__input']) !!}
            {!! Form::label('emails_to', 'e-mails principais',['class' => 'mdl-textfield__label']) !!}
        </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            {!! Form::text('emails_to_cc', null, ['class' => 'mdl-textfield__input']) !!}
            {!! Form::label('emails_to_cc', 'e-mails cc',['class' => 'mdl-textfield__label']) !!}
        </div>
        
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label ">
            {!! Form::label('responsible_area', 'Setor Responsável',['class' => '']) !!}
            {!! Form::select('responsible_area_id', array('1' => 'Manutenção', '2' => 'Melhoria')) !!}
        </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label ">
            {!! Form::label('responsible_person', 'Responsável',['class' => '']) !!}
            {!! Form::select('responsible_person_id', array('1' => 'Cléber', '2' => 'Elson', '3' => 'Henrique')) !!}
        </div>
        
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label ">
            {!! Form::label('module', 'Módulo',['class' => '']) !!}
            {!! Form::select('module_id', array('1' => 'AP', '2' => 'EC2')) !!}
        </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label ">
            {!! Form::label('request', 'Solicitação',['class' => '']) !!}
            {!! Form::select('request_id', array('1' => 'Correção', '2' => 'Nova Feature')) !!}
        </div>
        
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label ">
        {!! Form::label('priority', 'Prioridade',['class' => '']) !!}
            {!! Form::select('priority_id', array('1' => 'Normal', '2' => 'Urgente')) !!}
        </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label ">
            {!! Form::label('size', 'Tamanho',['class' => '']) !!}
            {!! Form::select('size_id', array('1' => 'Pequeno', '2' => 'Médio', '3' => 'Grande')) !!}
        </div>

        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell--6-col">
            {!! Form::text('title', null, ['class' => 'mdl-textfield__input']) !!}
            {!! Form::label('title', 'Título do Ticket',['class' => 'mdl-textfield__label']) !!}

        </div>


        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell--12-col">
            {!! Form::textarea('description', null, ['class' => 'mdl-textfield__input', 'rows' => 6]) !!}
            {!! Form::label('descricao', 'Descrição do Ticket',['class' => 'mdl-textfield__label']) !!}
        </div>

        <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-1">
            <input type="checkbox" name="sendmail" id="switch-1" class="mdl-switch__input" checked>
            <span class="mdl-switch__label">Enviar email</span>
        </label>

        <input type="hidden" name="contact_id" value="1">
    </div>
    <div class="mdl-card__actions mdl-card--border">
        <button class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">{{$submitButtonText}}</button>
    </div>
