@extends('layouts.app')

@section('content')
<h1>Salas</h1>
<a href="{{ route('salas.create') }}">Nova Sala</a>

<ul>
    @foreach($salas as $sala)
        <li>{{ $sala->nome }} - {{ $sala->situacao ? 'Ativa' : 'Inativa' }}
            <a href="{{ route('salas.edit', $sala->id) }}">Editar</a>
        </li>
    @endforeach
</ul>
@endsection
