<html>
    <h1>Library</h1>
    <p>View all Writer and Books</p>
    <h2>Writer</h2>

    @foreach($writers as $writer)


        {{ $writer->firstname.' '.$writer->lastname}}<br>



    @endforeach
</html>