<div class="form-group">

    {!! Form::label('title', 'Title') !!}
    {!! Form::text('title', null, ['class' =>'form-control']) !!}

</div>

<div class="form-group">

    {!! Form::label('body', 'Write Article :') !!}
    {!! Form::textarea('body', null, ['class' =>'form-control']) !!}

</div>

<div class="form-group">

    {!! Form::label('footer', 'Source :') !!}
    {!! Form::text('footer', null, ['class' =>'form-control']) !!}

</div>

<div class="form-group">

    {!! Form::submit('new Article', ['class' =>'btn btn-primary form-control']) !!}

</div>
