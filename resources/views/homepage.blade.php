<!-- la homepage del sito web -->
@extends('layout.layout')

@section('content')
    <section class="container">
        <h2>Articoli Scienza</h2>

        <div class="articles">
            @foreach($articoli_scienze as $articolo)

            <div class="article">
                <h3><a href="{{ route('single-article', $articolo['id']) }}">{{ $articolo['title'] }}</a></h3> <!-- title -->
                <p>{{ $articolo['excerpt'] }}</p> <!-- excerpt -->
                <small>{{ $articolo['publishedAt'] }}</small> <!-- data -->
                <h4>{{ $articolo['author'] }}</h4> <!-- author -->
            </div>

            @endforeach
        </div>
    </section>

    <section class="container">
        <h2>Articoli Ambiente</h2>

        <div class="articles">
            @foreach($articoli_ambiente as $articolo)

            <div class="article">
                <h3><a href="{{ route('single-article', $articolo['id']) }}">{{ $articolo['title'] }}</a></h3> <!-- title -->
                <p>{{ $articolo['excerpt'] }}</p> <!-- excerpt -->
                <small>{{ $articolo['publishedAt'] }}</small> <!-- data -->
                <h4>{{ $articolo['author'] }}</h4> <!-- author -->
            </div>

            @endforeach
        </div>
    </section>
@endsection