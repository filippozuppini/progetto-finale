@extends('Layouts.app')

@section('content')

    
<div class="container py-4">

    <a href="{{ route('admin.developers.index') }}" class="btn mb-3">
        <i class="bi bi-arrow-left me-2"></i>Indietro
    </a>

    <h1 class="mb-4">Nuovo developer</h1>

    <form action="{{ route('admin.developers.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control" name="name" id="name" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" >
        </div>

        <div class="mb-3">
            <label for="country" class="form-label">Cittá</label>
            <input type="text" class="form-control" name="country" id="country" >
        </div>

        <button type="submit" class="btn btn-primary">Crea developer</button>
    </form>

</div>

@endsection