@extends('layouts.app')

@section('content')

<div class="container py-4">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Sviluppatori</h1>
        <a href="{{ route('admin.developers.create') }}" class="btn btn-primary">Aggiungi sviluppatore</a>
    </div>

    <table class="table table-striped align-middle">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Cittá</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($developers as $developer )

                <tr>
                    <td>{{ $developer->name }}</td>
                    <td>{{ $developer->email }}</td>
                    <td>{{ $developer->country }}</td>
                    <td>
                        <a href="{{ route('admin.developers.show', $developer) }}" class="btn btn-primary btn-sm">Dettaglio</a>
                        <a href="{{ route('admin.developers.edit', $developer) }}" class="btn btn-success btn-sm">Modifica</a>
                        
                    </td>
                </tr>

            @endforeach
        </tbody>
    </table>

</div>


@endsection