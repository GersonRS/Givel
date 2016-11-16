@extends('layouts.app')


@section('content')
<div class="container">
<h1>Editando produto: {{ $product->name }}</h1>

		{!! Form::model($product, ['route'=>['admin.products.update', $product->id]]) !!}
		
		@include('admin.products._form')
		
		<div class="form-group">
		{!! Form::submit('Salvar produto', ['class'=>'btn btn-primary']) !!}
		</div>

		{!! Form::close() !!}


</div>
		@endsection