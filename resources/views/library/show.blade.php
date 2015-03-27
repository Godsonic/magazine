<html>
<h1>Library</h1>
<p>View all Writer and Books</p>
<h2>Writer</h2>

@foreach($journals as $journal)

    <div>
        <p>
            <strong>{{ $journal->title}}</strong> <small>Written by {{ $journal->writers->firstname }}</small><br>

    {{ $journal->body }}
        </div>
    </div>



@endforeach
</html>