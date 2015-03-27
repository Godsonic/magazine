@extends('pages.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="col-md-8">


                    <article>
                        <p>We brings every day news to pearlMagazine. Feel free to click on link below to view more about the
                            article. And don't forget to leave your comment.
                        </p>
                        @foreach($articles as $article)

                            <h4>
                                <a href="{{url('/article',$article->id)}}">
                                {{ $article->title}}</h4>
                            </a>


                        @endforeach
                    </article>

                </div>

                <div class="col-md-4">


                </div>

            </div>

            </div>
        <a href="article/create">New Article</a>

    </div>

@endsection
