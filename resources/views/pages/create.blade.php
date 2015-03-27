@extends('pages.master')

@section('content')
    <div class="container">

        <h3>Create new article</h3>
        <p>Please fill the fields below to create a new article</p>

        {!! Form::open(['url' =>'article']) !!}

        <!-- create new article form partial -->
        @include('partials.form')

        {!! Form::close() !!}

        <!-- close create article form -->

        <!--Form errors list if user make any-->
        @include('partials.articleError')


    </div>

@endsection
