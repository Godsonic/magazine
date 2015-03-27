@extends('pages.master')

@section('content')
    <div class="container">

        <article>

            <h3>{{ $article->title}}</h3>

            <div class="body">

                    {{$article->body }}
            </div>

            <footer>{{ $article->footer }}</footer>
        </article>

    </div>
    <a href="['ul' =>'article/create']">New Article</a>

@endsection
