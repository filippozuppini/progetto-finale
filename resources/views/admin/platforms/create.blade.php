@extends('Layouts.app')

@section('content')


    
<div class="container py-4">

    <a href="{{ route('admin.platforms.index') }}" class="btn mb-3">
        <i class="bi bi-arrow-left me-2"></i>Indietro
    </a>

    <h1 class="mb-4">Nuova piattaforma</h1>

    <form action="{{ route('admin.platforms.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control" name="name" id="name" required>
        </div>

        <div class="mb-3">
            <label for="icon" class="form-label">Icona</label>
            <input type="text" class="form-control" name="icon" id="icon" placeholder="Inserisci il nome di un icon di bootstrap" required>
        </div>


        <button type="submit" class="btn btn-primary">Crea piattaforma</button>
    </form>

</div>


@endsection