@extends('layout')
@section('title', 'Registration')


@section('content')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><img src="/path/to/your/logo.png" alt="Logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" 
    data-target="#navbarNav" aria-controls="navbarNav" 
    aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">News</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Movies</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Film</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Series</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-user"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-search"></i></a>
            </li>
        </ul>
    </div>
</nav>

    <script src="{{ asset('js/navbar.js') }}"></script>
@endsection
