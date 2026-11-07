@extends('Layouts.app')

@section('content')
 <div class="container py-4">

    <a href="{{ route('admin.platforms.index') }}" class="btn mb-3">
        <i class="bi bi-arrow-left me-2"></i>Tutte le piattaforme
    </a>

    <h1>
        {{ $platform->name }} <i class="bi {{ $platform->icon }}"></i>
    </h1>

    <div class="my-3">
        <a href="{{ route('admin.platforms.edit', $platform) }}" class="btn btn-success">Modifica</a>

        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#removeplatform-{{ $platform->id }}">
            Elimina
        </button>

        <div class="modal fade" id="removeplatform-{{ $platform->id }}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="{{ route('admin.platforms.destroy', $platform) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Sei sicuro?</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <label>Sei sicuro di voler eliminare la piattoforma: {{ $platform->name }}</label>
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

    <h2 class="h4 mt-4">Giochi disponobili su questa piattaforma ({{ $platform->games->count() }})</h2>
    <ul class="list-group">
        @forelse ($platform->games as $game)
            <li class="list-group-item">
                <a href="{{ route('admin.games.show', $game) }}">{{ $game->title }}</a>
            </li>
        @empty
            <li class="list-group-item text-muted">Nessun gioco disponibile su questa piattaforma.</li>
        @endforelse
    </ul>
        
    </div>

</div>
@endsection