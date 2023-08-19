@extends('layouts.app')
@section('content')
            <div class="main-container">
                <div class="card" style="width: 18rem;">
                <img src="/products/{{$product ->image}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$product ->name}}</h5>
                    <p class="card-text">{{$product ->description}}</p>
                    <a href="/" class="btn btn-primary">Go home</a>
                </div>
                </div>
            </div>

        @endsection
