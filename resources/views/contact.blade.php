@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Contato</div>

                <div class="panel-body">
                    {!! Form::open(['route'=>'send']) !!}
                        <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                            {!! Form::label('Name', 'Nome:',['class' => 'control-label']) !!}
                            {!! Form::text('name', null, ['class'=>'form-control']) !!}
                            @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                            {!! Form::label('Email', 'E-mail:',['class' => 'control-label']) !!}
                            {!! Form::text('email', null, ['class'=>'form-control']) !!}
                            @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('message') ? ' has-error' : '' }}">
                            {!! Form::label('Message', 'Mensagem:',['class' => 'control-label']) !!}
                            {!! Form::textarea('message', null, ['class'=>'form-control']) !!}
                            @if ($errors->has('message'))
                            <span class="help-block">
                                <strong>{{ $errors->first('message') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            {!! Form::submit('enviar', ['class'=>'btn btn-primary']) !!}
                        </div>
                    {!! Form::close() !!}
                </div>
                @if (session('status'))
                <div class="panel-footer">
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
