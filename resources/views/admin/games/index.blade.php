@extends('layouts.app')

@section('content')


<div class="container">
    
    <h1>Giochi</h1>


        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Immagine</th>
                        <th scope="col">Titolo</th>
                        <th scope="col">Sviluppatore</th>
                        <th scope="col">Prezzo</th>
                        <th scope="col">Uscita</th>
                        <th scope="col">Azione</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($games as $game)
                    
                    <tr class="">
                        <td><img src="{{ asset('storage/' . $game->cover_image) }}" alt="immagine copertina {{ $game->title }}" width="120"></td>
                        <td>{{ $game->title }}</td>
                        <td>{{ $game->developer->name }}</td>
                        <td>€ {{ $game->price }}</td>
                        <td>{{ $game->release_date->format('d/m/Y') }}</td>
                        <td><a class="btn btn-primary" href={{ route('admin.games.show', $game) }} role="button">Dettaglio</a></td>
                    </tr>
                    
                    @endforeach
                </tbody>
            </table>
        </div>

</div>

@endsection
