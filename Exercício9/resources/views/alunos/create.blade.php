@extends('layout.principal')

@section('conteudo')

    <h1>Inserir Aluno</h1>

    <a href="{{ route('alunos.index') }}">Voltar</a>

    <form method="post" action="{{ url('/alunos') }}">

        @csrf

        Nome: <input type="text" name="nome"> <br>
        CEP: <input type="text" name="cep"> <br>

        Cidade:
          <!-- <input type="text" name="estado_id"> <br> //-->
          <select name="cidade_id">
            <option value="">Selecione:</option>
            <!-- Dados dos estados //-->
            @foreach($cidades as $a)
              <option value="{{ $a->id }}">{{ $a->nome }}</option>
            @endforeach
          </select>
          
        <input type="submit" name="btnSalvar" value="Salvar">

    </form>

@endsection