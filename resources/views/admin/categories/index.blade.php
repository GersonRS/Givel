@extends('layouts.app')


@section('content')
<div class="container">
	<h1>Categorias</h1>

	<a href="{{ route('admin.categories.create') }}" class="btn btn-default">Nova categoria</a>
    <div class="table-responsive">
	<table class="table table-bordered table-striped table-condensed">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nome</th>
				<th>Ação</th>
			</tr>
		</thead>
		<tbody>
			@foreach($categories as $category)
			<tr>
				<td>{{ $category->id }}</td>
				<td>{{ $category->name }}</td>
				<td>
				<a class="btn btn-default btn-sm" href="{{ route('admin.categories.edit',['id'=>$category->id]) }}">
				Editar
				</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	</div>
	{!! $categories->render() !!}
</div>

@endsection