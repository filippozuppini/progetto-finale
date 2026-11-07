@extends('layouts.app')

@section('content')


<div class="container">
    
    
    <div class="head row">
        
        <h1>Piattaforme</h1>
        <div class="col-md flot">
            <a href="{{ route('admin.platforms.create') }}" class="btn btn-primary float-end">Aggiungi piattaforma</a>
        </div>
        
    </div>


        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Icona</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($platforms as $platform)
                    
                    <tr class="">
                        <td>{{ $platform->name }}</td>
                        <td><i class="bi {{ $platform->icon }}"></i></td>
                        <td><a class="btn btn-primary" href={{ route('admin.platforms.show', $platform) }} role="button">Dettaglio</a></td>
                        <td><a class="btn btn-success" href={{ route('admin.platforms.edit', $platform) }} role="button">Modifica</a></td>
                        <td><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#removeplatform-{{ $platform->id }}">Elimina</button></td>

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
                    </tr>
                    
                    @endforeach
                </tbody>
            </table>
        </div>

</div>

@endsection
