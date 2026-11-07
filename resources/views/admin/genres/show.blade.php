@extends('layouts.app')


@section('content')

    <div class="container py-4">

    <a href="{{ route('admin.genres.index') }}" class="btn mb-3">
        <i class="bi bi-arrow-left me-2"></i>Tutti i generi
    </a>

    <h1>
        <span class="badge" style="background-color: {{ $genre->color }}">{{ $genre->name }}</span>
    </h1>

    <div class="my-3">
        <a href="{{ route('admin.genres.edit', $genre) }}" class="btn btn-success">Modifica</a>

        <form action="{{ route('admin.genres.destroy', $genre) }}" method="POST" class="d-inline"
              onsubmit="return confirm('Vuoi davvero eliminare il genere {{ $genre->name }}?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Elimina</button>
        </form>
    </div>

    <h2 class="h4 mt-4">Giochi di questo genere ({{ $genre->games->count() }})</h2>

    <ul class="list-group">
        @forelse ($genre->games as $game)
            <li class="list-group-item">
                <a href="{{ route('admin.games.show', $game) }}">{{ $game->title }}</a>
            </li>
        @empty
            <li class="list-group-item text-muted">Nessun gioco collegato a questo genere.</li>
        @endforelse
    </ul>

</div>

@endsection