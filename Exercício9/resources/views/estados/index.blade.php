
@extends('layout.principal')

@section('conteudo')

	<a href="{{ route('estados.create') }}">Inserir estado</a>
	<!-- OUTRA OPÇÃO <a href="/estados/create/">Inserir estado</a> -->

	<table class="table table-bordered table-striped table-hover table-condensed">

		<tr>
			<th>Código</th>
			<th>Estado</th>
			<th>Sigla</th>
			<th>Ação</th>
		</tr>

		@foreach( $estados as $e )

		<tr>
			<td>{{ $e->id }}</td>
			<td>{{ $e->nome }}</td>
			<td>{{ $e->sigla }}</td>
			<td><a href="/estados/{{ $e->id }}">Exibir</a></td>
		</tr>	

		@endforeach

	</table>

@endsection('conteudo')
