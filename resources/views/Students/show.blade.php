@extends('layouts.app')

@section('content')
    <a href="\Students\{{$s->id}}\edit" class="btn btn-primary">Edit {{$s->Name}}</a>
    <a href="\Students\{{$s->id}}\AllSubjects" class="btn btn-primary">Select Subject {{$s->Name}}</a>
    <a href="\Students" class="btn btn-primary float-right">Go Back</a>
    <br><br>
    <div class='card'>
        <h3 class="card-header">{{$s->Name}}</h3>
        @if(count($s->subjects)>0)
        <ol class="list-group">
            @foreach($s->subjects as $subject)
        <li class="list-group-item"><a class="text-dark" style="text-decoration: none;" href="/Students/{{$s->id}}/selectTeacher/{{$subject->id}}">{{$subject->name}}</a></li>
            @endforeach
        </ol>
      @else
        <p class="alert alert-info">No Subject Selected</p>
      @endif
   
<div class="card-footer">Admission date and time {{$s->created_at}}</div>

</div class="mt-4">
    {!!Form::open(['action' => ['StudentsController@destroy', $s->id], 'method' => 'POST', 'class' => 'float-right mt-4'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
@endsection