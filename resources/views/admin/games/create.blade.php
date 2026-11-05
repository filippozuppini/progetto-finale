@extends('layouts.app')

@section('content')

<div class="container">

    <a
        class="btn my-5"
        href="{{ route("admin.games.index") }}"
        role="button"
        ><i class="bi bi-arrow-left me-2"></i>Indietro</a
    >


    <form action="{{ route("admin.games.store") }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input
                type="text"
                class="form-control"
                name="title"
                id="title"
                placeholder="Inserisci il titolo del gioco"
            />
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control" name="description" id="description" rows="3"></textarea>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input
                type="number"
                class="form-control"
                name="price"
                id="price"
                placeholder="Inserisci il prezzo del gioco"
                min="0"
                step="0.01"
            />
        </div>

        <div class="mb-3">
            <label for="release_date" class="form-label">Data di rilascio</label>
            <input
                type="date"
                class="form-control"
                name="release_date"
                id="release_date"
                placeholder="Inserisci la data di rilascio"
            />
            
        </div>

        <div class="mb-3">
            <label for="developer_id" class="form-label">Sviluppatore</label>
            <select
                class="form-select form-select-lg"
                name="developer_id"
                id="developer_id"
            >
                <option value="" selected>-- Seleziona --</option>
                @foreach ($developers as $developer)
                    <option value="{{ $developer->id }}">{{ $developer->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <div class="d-block">
                <label class="form-label">Seleziona il genere</label>
            </div>

            @foreach ($genres as $genre)
            
                <div class="form-check form-check-inline" style="background-color: {{ $genre->color }}">
                    <input
                        class="form-check-input"
                        type="checkbox"
                        name="genres[]"
                        id="genre-{{ $genre->id }}"
                        value="{{ $genre->id }}"
                    />
                    <label class="form-check-label" for="genre-{{ $genre->id }}">{{ $genre->name }}</label>
                </div>
                
            @endforeach
            
        
        </div>

        <div class="mb-3">
            <div class="d-block">
                <label class="form-label">Seleziona la piattaforma</label>
            </div>

            @foreach ($platforms as $platform)

                <div class="form-check form-check-inline">
                    <input
                        class="form-check-input"
                        type="checkbox"
                        name="platforms[]"
                        id="platform-{{ $platform->id }}"
                        value="{{ $platform->id }}"
                    />
                    <label class="form-check-label" for="platform-{{ $platform->id }}" ><i class="bi {{ $platform->icon }} me-2"></i>{{ $platform->name }}</label>
                </div>    
                
            @endforeach        
        
        </div>

        <div class="mb-3">

            <div class="mb-3">
                <label for="cover_image" class="form-label">Seleziona l'immagine di copertina</label>
                <input
                    type="file"
                    class="form-control"
                    name="cover_image"
                    id="cover_image"
                />
            </div>

        </div>



        <button
            type="submit"
            class="btn btn-primary"
        >
            Crea
        </button>
        
        
        


    </form>
    
    
</div>

@endsection
