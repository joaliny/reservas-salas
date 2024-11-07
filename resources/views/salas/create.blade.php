@extends('layouts.app')

@section('content')
<h1>Criar Nova Sala</h1>

<form action="{{ route('salas.store') }}" method="POST">
    @csrf
    <label>Nome:</label>
    <input type="text" name="nome" required>

    <label>Descrição:</label>
    <textarea name="descricao"></textarea>

    <label>Situação:</label>
    <select name="situacao">
        <option value="1">Ativa</option>
        <option value="0">Inativa</option>
    </select>

    <button type="submit">Salvar</button>
</form>
@endsection
