@extends('layouts.main')

@section('content')
<div class="container-details">
        <h1>{{ $movie->title }}</h1>
        <div class="card d-flex">
            <div class="left-card-info">
                <div class="card-image">
                  <img src="{{ $movie->image }}" alt="">
                </div>
            </div>
            <div class="right-card-info">
                <div class="details">
                  <h4>{{ $movie->original_title }}</h4>
                  <h4>Language:  {{ $movie->lang }}</h4>
                  <h4>Released on:  {{ $movie->date_released }}  </h4>
                  <h4>Ratings:  {{ $movie->vote }}</h4>
                </div>
                <div class="overlay">
                    <a href="https://www.moviehive.lol/movie.html?id={{ $movie->movie_id }}">
                      <button class="btn-watch"><strong>Play now</strong></button>
                    </a>
                </div>
                <div class="plot">
                  <p>{{ $movie->over_view }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
