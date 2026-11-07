@extends('Layouts.app')

@section('content')
 <div class="container py-4">

    <a href="{{ route('admin.developers.index') }}" class="btn mb-3">
        <i class="bi bi-arrow-left me-2"></i>Tutti i generi
    </a>

    <h1>
        {{ $developer->name }}
    </h1>

    <div class="my-3">
        <a href="{{ route('admin.developers.edit', $developer) }}" class="btn btn-success">Modifica</a>

        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#removedeveloper-{{ $developer->id }}">
            Elimina
        </button>

        <div class="modal fade" id="removedeveloper-{{ $developer->id }}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="{{ route('admin.developers.destroy', $developer) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <label>Sei sicuro di voler eliminare il genere: {{ $developer->name }}</label>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-danger">Elimina</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        
    </div>

    <h2 class="h4 mt-4">Giochi di questo sviluppatore ({{ $developer->games->count() }})</h2>

    <ul class="list-group">
        @forelse ($developer->games as $game)
            <li class="list-group-item">
                <a href="{{ route('admin.games.show', $game) }}">{{ $game->title }}</a>
            </li>
        @empty
            <li class="list-group-item text-muted">Nessun gioco collegato a questo sviluppatore.</li>
        @endforelse
    </ul>

</div>
@endsection