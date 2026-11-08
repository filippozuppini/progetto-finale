@extends('layouts.app')

@section('content')

<div class="container">

    <a
        class="btn my-5"
        href="{{ route("admin.games.index") }}"
        role="button"
        ><i class="bi bi-arrow-left me-2"></i>Indietro</a
    >

    <a class="btn btn-success" href={{ route('admin.games.edit', $game) }} role="button">Modifica</a>

    
    <div class="row align-items-md-stretch">
        <h1>{{ $game->title }}</h1>
        <div class="col-md-7">
            <div
                class="h-100 p-5 border rounded-3"
                style=" background-position: center; background-size: cover; background-image: url('{{ asset('storage/' . $game->cover_image) }}');"
                
            >
            </div>
        </div>
        <div class="col-md-5">
            <div class="h-100 p-5 border rounded-3">
                
                <p><b>Descrizione:</b>  {{ $game->description }}</p>
                <p><b>Sviluppatore:</b> {{ $game->developer->name ?? 'Nome non disponibile' }}</p>
                <p><b>Data di rilascio:</b> {{ $game->release_date?->format('d-m-Y') }}</p>

                <div class="d-flex flex-wrap align-items-center gap-2 mb-3">
                    <p><b>Etichette:</b></p>

                    @forelse ($game->genres as $genre)
                        <span class="badge rounded-pill" style="background-color: {{ $genre->color }}">{{ $genre->name }}</span>
                    @empty
                        <span class="text-muted">Nessun genere</span>
                    @endforelse

                </div>

                <div class="d-flex gap-3">
                    <p><b>Piattaforme: </b></p>
                    @forelse ($game->platforms as $platform)

                        <i class="bi {{ $platform->icon }}"></i>

                        
                    @empty
                        
                    @endforelse
                </div>

            </div>
        </div>
    </div>

</div>

@endsection