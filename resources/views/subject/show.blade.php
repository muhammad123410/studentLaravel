@extends('layouts.app')

@section('content')
    <a href="\subject\{{$s->id}}\edit" class="btn btn-primary">Edit {{$s->name}}</a>
    <a href="\subject" class="btn btn-primary float-right">Go Back</a>
    <br><br>
    <div class='card'>
        <h3 class="card-header">{{$s->name}}</h3>
        @if(count($s->teachers)>0)
        <ol class="list-group">
            @foreach($s->teachers as $teacher)
                <li class="list-group-item">{{$teacher->name}}</li>
            @endforeach
        </ol>
      @else
        <p class="alert alert-info">No Teacher Teaching </p>
      @endif
      <div class="card-footer">Course Offered from {{$s->created_at}}</div>
    </div>
    {!!Form::open(['action' => ['SubjectsController@destroy', $s->id], 'method' => 'POST', 'class' => 'mt-4 float-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
@endsection