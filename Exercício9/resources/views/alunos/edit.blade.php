@extends('layout.principal')

@section('conteudo')

    <h1>Editar aluno</h1>

    <a href="{{ route('alunos.index') }}">Voltar</a>

    <form method="post" action="{{ route('alunos.update', $aluno->id) }}">

        @csrf
        @method('PATCH')

        Nome: <input type="text" name="nome" value="{{ $aluno->nome }}"> <br>
        CEP: <input type="text" name="cep" value="{{ $aluno->cep }}"> <br>
        Cidade:

        <select name="cidade_id">
          <option value="">Selecione:</option>
          <!-- Dados dos estados //-->
          @foreach($cidades as $c)
            <option value="{{ $c->id }}"
                @if ( $c->id == $aluno->cidade_id )
                    selected
                @endif
              >{{ $c->nome }}</option>
          @endforeach
        </select>


       <input type="submit" name="btnSalvar" value="Salvar">

    </form>

@endsection