@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
        @auth

        @foreach($user as $item)
            <div class="card m-3" style="width: 18rem;">
                <img src="{{ URL::to('/assets/img/mechanic.jpg') }}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">{{$item->name}}</h5>
                    <p class="card-text">Aprasymas apie mechanika</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
            @endforeach

            @include('like')

        @endauth

        @guest
            <h1>Pagrindinis</h1>
            <p class="lead">Prašome prisijungti norit peržiūrėti meistrus</p>
        @endguest
    </div>
@endsection
