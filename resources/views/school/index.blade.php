<html>
    <h1>WellSchool</h1>
    <ul>
    @foreach($tutors as $tutor)
        <h3>{{ $tutor->courses->grade }}</h3>
        <li>{{ $tutor->firstname.' '.$tutor->lastname }}</li>

    @endforeach
    </ul>
</html>