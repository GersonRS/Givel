
<div class="form-group">
{!! Form::label('Category', 'Categoria:') !!}
{!! Form::select('category_id', $categories, null, ['class'=>'form-control']) !!}
</div>

<div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
{!! Form::label('Name', 'Nome:',['class' => 'control-label']) !!}
{!! Form::text('name', null, ['class'=>'form-control']) !!}
@if ($errors->has('name'))
    <span class="help-block">
        <strong>{{ $errors->first('name') }}</strong>
    </span>
@endif
</div>


<div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
{!! Form::label('Description', 'Descrição:',['class' => 'control-label']) !!}
{!! Form::textarea('description', null, ['class'=>'form-control']) !!}
@if ($errors->has('description'))
    <span class="help-block">
        <strong>{{ $errors->first('description') }}</strong>
    </span>
@endif
</div>


<div class="form-group {{ $errors->has('price') ? ' has-error' : '' }}">
{!! Form::label('Price', 'Preço:',['class' => 'control-label']) !!}
{!! Form::text('price', null, ['class'=>'form-control']) !!}
@if ($errors->has('price'))
    <span class="help-block">
        <strong>{{ $errors->first('price') }}</strong>
    </span>
@endif
</div>

