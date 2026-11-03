@extends('layouts.app')
@section('content')

<div class="jumbotron p-5 mb-4 bg-light rounded-3">
    <div class="container py-5">
        <div class="logo_laravel">

            <a class="navbar-brand" href="#">
                <img src="/public/storage/logo/logo_steam.svg" alt="" width="100" height="50">
            </a>
            
        </div>
        <h1 class="display-5 fw-bold">
            Welcome to Laravel+Bootstrap <i class="bi bi-box"></i>
        </h1>

        <p class="col-md-8 fs-4">
            This is a preset package with Bootstrap 5 views for laravel projects including laravel breeze/blade. It works from laravel 9.x to the latest release 11.x.
            You can also use bootstrap icons out of the box.
        </p>
        <a href="https://packagist.org/packages/pacificdev/laravel_9_preset" class="btn btn-primary btn-lg" type="button">Documentation</a>
    </div>
</div>

<div class="content">
    <div class="container">
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora temporibus, dicta nemo aliquam totam nisi deserunt soluta quas voluptatum ab beatae praesentium necessitatibus minus, facilis illum rerum officiis accusamus dolores!</p>
    </div>
</div>
@endsection