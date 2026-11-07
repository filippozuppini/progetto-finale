@extends('Layouts.app')


@section('content')


<div class="container py-4">

    <a href="{{ route('admin.genres.index', $genre) }}" class="btn mb-3">
        <i class="bi bi-arrow-left me-2"></i>Indietro
    </a>

    <h1 class="mb-4">Modifica genere</h1>

    <form action="{{ route('admin.genres.update', $genre) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ $genre->name }}" required>
        </div>

        <div class="mb-3">
            <label for="color" class="form-label">Colore del badge</label>
            <input type="color" class="form-control form-control-color" name="color" id="color" value="{{ $genre->color }}">
        </div>

        <button type="submit" class="btn btn-primary">Salva modifiche</button>
    </form>

</div>

@endsection