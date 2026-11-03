@extends('layouts.app')

@section('content')

<style>

.likes-button{
    background-color: rgb(52, 87, 184);
    color: rgb(144, 196, 255);
    font-weight: bold;

}

.likes-button:hover{
    background-color: rgb(82, 163, 255);
    color: white;
}

</style>

<div class="container">

    
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
                <p><b>Sviluppatore:</b> {{ $game->developer->name }}</p>
                <p><b>Data di rilascio:</b> {{ $game->release_date->format('d-m-Y') }}</p>
                <p><b>Sviluppatore:</b> {{ $game->developer->name }}</p>


                <div class="tags d-flex">
                    <p><b>Etichette:</b></p>

                </div>

            </div>
        </div>
        <div class="col-md-5">
            <div class="d-flex " >
                <a href="" class="likes-button btn px-4 mt-2 me-2">Aggiungi alla lista dei desideri</a>
                <a href="" class="likes-button btn px-4 mt-2 me-2">Segui</a>
                <a href="" class="likes-button btn px-4 mt-2 me-2">Ignora</a>

            </div>
        </div>
    </div>

    <div class="row align-items-md-stretch">
        <div class="col-md-12  border rounded-3 m-5">

            <h1>{{ $game->title }}</h1>

        </div>
    

</div>

@endsection