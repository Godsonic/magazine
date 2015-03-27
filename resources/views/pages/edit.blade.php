@extends('pages.master')

@section('content')
    <div class="container">

        <h3>Update article</h3>

        <h4>Edit: {{ $article->title }}</h4>

        {!! Form::model($article, ['method'=>'PATCH','action' =>['ArticleController@update', $article->id]]) !!}

        <!-- edit form partials-->
        @include('partials.form')

        {!! Form::close() !!}

        <!-- close edit form -->


        <!--Form errors list if user make any-->
        @include('partials.articleError')


    </div>

@endsection
