@extends('layout.principal')

@section('conteudo')

<h1>Dados do aluno</h1>

<p>Código: {{ $aluno->id }}</p>
<p>Nome: {{ $aluno->nome }}</p>
<p>Nome: {{ $aluno->cep }}</p>

<p>Cidade: {{ $aluno->cidade->nome }}</p>

<a href="{{ route('alunos.index') }}">Voltar</a>
<a href="{{ route('alunos.edit', $aluno->id) }}">Editar</a>

<form method="post" onsubmit="return confirm('Confirma exclusão do aluno?');" action="{{ route('alunos.destroy', $aluno->id) }}">

  	@csrf
 	@method('DELETE')
  	<input type="submit" value="Excluir">

</form>

@endsection