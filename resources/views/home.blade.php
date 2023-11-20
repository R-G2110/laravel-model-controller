@extends('layouts.main')

@section('content')
    <h1>HOME</h1>
    <div class="container">
      <div class="cards-wrapper d-flex ">
        @foreach ($movies as $movie)
        <div class="card d-flex">
            <div class="left">
                <div class="card-image">
                    <img src="{{ $movie->image }}" alt="">
                </div>
                <div class="card-title">
                    <h3>{{ $movie->title }}</h3>
                </div>
            </div>
            <div class="card-info">
                <h4>{{ $movie->original_title }}</h4>
                <h4>{{ $movie->lang }}</h4>
                <h4>{{ $movie->date_released }}</h4>
                <h4>{{ $movie->vote }}</h4>
            </div>
        </div>
        @endforeach


    </div>
@endsection
