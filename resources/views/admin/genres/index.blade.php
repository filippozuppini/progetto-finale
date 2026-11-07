@extends('layouts.app')

@section('content')

<div class="container py-4">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Generi</h1>
        <a href="{{ route('admin.genres.create') }}" class="btn btn-primary">Aggiungi genere</a>
    </div>

    <table class="table table-striped align-middle">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Colore</th>
                <th>Giochi</th>
                <th>Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($genres as $genre)
                <tr>
                    <td>{{ $genre->name }}</td>
                    <td>
                        <span class="badge" style="background-color: {{ $genre->color }}">{{ $genre->color }}</span>
                    </td>
                    <td>{{ $genre->games_count }}</td>
                    <td>
                        <a href="{{ route('admin.genres.show', $genre) }}" class="btn btn-primary btn-sm">Dettaglio</a>
                        <a href="{{ route('admin.genres.edit', $genre) }}" class="btn btn-success btn-sm">Modifica</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>


@endsection