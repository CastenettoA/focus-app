<!-- la homepage del sito web -->
@extends('layout.layout')

@section('content')
    <section class="container">
        <h2>Articoli Scienza</h2>

        <div class="articles">

            <div class="article">
                {{ $articolo['id'] }}}
                <h3>{{ $articolo['title'] }}</h3> <!-- title -->
                <p>{{ $articolo['excerpt'] }}</p> <!-- excerpt -->
                <small>{{ $articolo['publishedAt'] }}</small> <!-- data -->
                <h4>{{ $articolo['author'] }}</h4> <!-- author -->
            </div>

        </div>
    </section>
@endsection
