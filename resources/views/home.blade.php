@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="cards-wrapper d-flex ">
            @foreach ($movies as $movie)
                <a href="{{  route('details', ['id' => $movie->id]) }}">
                    <div class="card d-flex">
                        <div class="left">
                            <div class="card-image">
                              <img src="{{ $movie->image }}" alt="">
                            </div>
                            <div class="card-title">
                              <h4>{{ $movie->title }}</h4>
                            </div>
                        </div>
                        <div class="card-info">
                            <div class="details">
                              <h4>{{ $movie->original_title }}</h4>
                              <h4>{{ $movie->lang }}</h4>
                              <h4>Released on: {{ $movie->date_released }}</h4>
                              <h4>Ratings: {{ $movie->vote }}</h4>
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
                </a>
            @endforeach
        </div>
    </div>
@endsection
