@extends('layouts.app')

@section('content')
<div class="container">
    <a href="\teacher\{{$s->id}}\edit" class="btn btn-primary">Edit {{$s->name}}</a>
    <a href="\teacher" class="btn btn-primary float-right">Go Back</a>
    <a href="\teacher\{{$s->id}}\AllSubjects" class="btn btn-primary">Select Subject {{$s->Name}}</a>

    <br><br>
    <div class='card '>
        <h3 class="card-header">{{$s->name}}</h3>
        @if(count($s->subjects)>0)
        <ol class="list-group">
            @foreach($s->subjects as $subject)
                <li class="list-group-item"><a class="text-dark" style="text-decoration: none;" href="/teacher/{{$s->id}}/viewStudents/{{$subject->id}}">{{$subject->name}}</a></li>
            @endforeach
        </ol>
      @else
        <p class="alert alert-info">No Subject Selected</p>
      @endif
      <div class="card-footer">Start Teaching at {{$s->created_at}}</div>
    </div>
    
    <div class='card mt-4'>
        <h3 class="card-header">All Studnet</h3>
        @if(count($s->students)>0)
        <ol class="list-group">
            @foreach($s->students as $student)
                <li class="list-group-item">{{$student->Name}}</li>
            @endforeach
        </ol>
      @else
        <p class="alert alert-info">No students </p>
      @endif
      <div class="card-footer">Start Teaching at {{$s->created_at}}</div>
    </div>

    
    <div class="pt-4">
        {!!Form::open(['action' => ['TeachersController@destroy', $s->id], 'method' => 'post', 'class' => 'float-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
    </div>
   
</div>

@endsection