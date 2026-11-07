@extends('layouts.app')

@section('content')

<div class="container">

    <a
        class="btn my-5"
        href="{{ route("admin.games.index") }}"
        role="button"
        ><i class="bi bi-arrow-left me-2"></i>Indietro</a
    >

    <td><a class="btn btn-success" href={{ route('admin.games.edit', $game) }} role="button">Modifica</a></td>

    
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
                <p><b>Data di rilascio:</b> {{ $game->release_date->format('d-m-Y') }}</p>



                <div class="tags d-flex">
                    <p><b>Etichette:</b></p>

                </div>

            </div>
        </div>
    </div>

    <div class="align-items-md-stretch">
        <div class="col-md-12  border rounded-3 m-5">

            <h1>{{ $game->title }}</h1>

        </div>
    </div>

</div>

@endsection