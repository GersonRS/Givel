<div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
{!! Form::label('Name', 'Nome:',['class' => 'control-label']) !!}
{!! Form::text('name', null, ['class'=>'form-control']) !!}
@if ($errors->has('name'))
    <span class="help-block">
        <strong>{{ $errors->first('name') }}</strong>
    </span>
@endif
</div>