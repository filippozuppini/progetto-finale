@extends('layouts.app')

@section('content')


<div class="container">
    
    
    <div class="head row">
        
        <h1>Giochi</h1>
        <div class="col-md flot">
            <a href="{{ route('admin.games.create') }}" class="btn btn-primary float-end">Aggiungi gioco</a>
        </div>
        
    </div>


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
                        <td>{{ $game->developer->name ?? 'Nome non disponibile' }}</td>
                        <td>€ {{ $game->price }}</td>
                        <td>{{ $game->release_date->format('d/m/Y') }}</td>
                        <td><a class="btn btn-primary" href={{ route('admin.games.show', $game) }} role="button">Dettaglio</a></td>
                        <td><a class="btn btn-success" href={{ route('admin.games.edit', $game) }} role="button">Modifica</a></td>
                        <td><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal-{{ $game->id }}">Elimina</button></td>
                        

                        <div class="modal fade" id="deleteModal-{{ $game->id }}" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Sei sicuro?</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('admin.games.destroy', $game) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')

                                            <label for="">Vuoi davvero eliminare il gioco {{ $game->title }} ?</label>
                                    </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">Annulla</button>
                                            <button type="submit" class="btn btn-danger">Elimina</button>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>


                    </tr>
                    
                    @endforeach
                </tbody>
            </table>
        </div>

</div>

@endsection
